<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Language;
use App\Models\Template;
use App\Models\Subscriber;
use App\Http\Traits\Notify;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogCategoryDetails;
use App\Models\BlogDetails;
use Illuminate\Http\Request;
use App\Models\ContentDetails;
use Stevebauman\Purify\Facades\Purify;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    use Notify;

    public function __construct()
    {
        $this->theme = template();
    }

    public function index()
    {
        $templateSection        = ['banner-heading','hero', 'about-us', 'why-chose-us', 'how-it-work', 'how-we-work', 'know-more-us', 'deposit-withdraw', 'news-letter', 'news-letter-referral', 'testimonial', 'request-a-call', 'investor', 'blog', 'faq', 'we-accept', 'investment'];
        $data['templates']      = Template::templateMedia()->whereIn('section_name', $templateSection)->get()->groupBy('section_name');

        $contentSection         = ['team-member','feature', 'why-chose-us', 'how-it-work', 'how-we-work', 'know-more-us', 'testimonial', 'investor', 'blog', 'faq'];

        $data['contentDetails'] = ContentDetails::select('id', 'content_id', 'description', 'created_at')
            ->whereHas('content', function ($query) use ($contentSection) {
                return $query->whereIn('name', $contentSection);
            })
            ->with(['content:id,name',
                'content.contentMedia' => function ($q) {
                    $q->select(['content_id', 'description']);
                }])
            ->get()->groupBy('content.name');

        return view($this->theme . 'home', $data);
    }


    public function about()
    {

        $templateSection           = ['testimonial', 'about-us', 'investor', 'faq', 'we-accept', 'how-it-work', 'how-we-work', 'know-more-us'];
        $data['templates']         = Template::templateMedia()->whereIn('section_name', $templateSection)->get()->groupBy('section_name');

        $contentSection            = ['testimonial', 'feature', 'why-chose-us', 'investor', 'faq', 'how-it-work', 'how-we-work', 'know-more-us'];
        $data['contentDetails']    = ContentDetails::select('id', 'content_id', 'description', 'created_at')

            ->whereHas('content', function ($query) use ($contentSection) {
                return $query->whereIn('name', $contentSection);
            })
            ->with(['content:id,name',
                'content.contentMedia' => function ($q) {
                    $q->select(['content_id', 'description']);
                }])
            ->get()->groupBy('content.name');

        return view($this->theme . 'about', $data);
    }

    public function pricing(){
        return view($this->theme . 'pricing');
    }

    public function listing(){
        return view($this->theme . 'listing');
    }

    public function listing_details(){
        return view($this->theme . 'listing_details');
    }


    public function blog()
    {
        $data['title'] = "Blog";
        $data['allBlogs']     = Blog::with(['details','blogCategory.details'])->latest()->paginate(3);
        $data['blogCategory'] = BlogCategory::with('details')->latest()->get();
        return view($this->theme . 'blog', $data);
    }

    public function blogSearch(Request $request){
        
        $data['title'] = "Blog";
        $search = $request->search;

        $data['blogCategory'] = BlogCategory::with('details')->latest()->get();

        $data['allBlogs'] = Blog::with('details','blogCategory.details')
        ->whereHas('blogCategory.details', function ($qq) use ($search){
            $qq->where('name','Like', '%'.$search.'%');
        })
        ->orWhereHas('details', function ($qq2) use ($search){
            $qq2->where('title','Like', '%'.$search.'%');
            $qq2->orWhere('author','Like', '%'.$search.'%');
            $qq2->orWhere('details','Like', '%'.$search.'%');
        })
        ->latest()->paginate(3);

        return view($this->theme . 'blog', $data);

    }


    public function blogDetails($slug = null, $id)
    {
        $data['title'] = "Blog Details";
        $data['singleBlog']    = Blog::with('details')->findOrFail($id);
        $data['blogCategory']  = BlogCategoryDetails::where('blog_category_id', $data['singleBlog']->blog_category_id)->first();
        $data['relatedBlogs']  = Blog::with(['details', 'blogCategory.details'])->where('id','!=',$id)->where('blog_category_id', $data['singleBlog']->blog_category_id)->latest()->paginate(3);
        return view($this->theme . 'blogDetails', $data);
    }

    public function CategoryWiseBlog($slug = null, $id){

        $data['title'] = "Blog";

        $data['allBlogs'] = Blog::with(['details', 'blogCategory.details'])->where('blog_category_id', $id)->latest()->paginate(3);
        $data['blogCategory'] = BlogCategory::with('details')->latest()->get();

        return view($this->theme . 'blog', $data);
    }



    public function faq()
    {

        $templateSection          = ['faq'];
        $data['templates']        = Template::templateMedia()->whereIn('section_name', $templateSection)->get()->groupBy('section_name');

        $contentSection           = ['faq'];
        $data['contentDetails']   = ContentDetails::select('id', 'content_id', 'description', 'created_at')

            ->whereHas('content', function ($query) use ($contentSection) {
                return $query->whereIn('name', $contentSection);
            })
            ->with(['content:id,name',
                'content.contentMedia' => function ($q) {
                    $q->select(['content_id', 'description']);
                }])
            ->get()->groupBy('content.name');

        $data['increment'] = 1;
        return view($this->theme . 'faq', $data);
    }

    public function contact()
    {
        $templateSection    = ['contact-us'];
        $templates          = Template::templateMedia()->whereIn('section_name', $templateSection)->get()->groupBy('section_name');
        $title              = 'Contact Us';
        $contact            = @$templates['contact-us'][0]->description;

        return view($this->theme . 'contact', compact('title', 'contact'));
    }

    public function contactSend(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:50',
            'email'    => 'required|email|max:91',
            'subject'  => 'required|max:100',
            'message'  => 'required|max:1000',
        ]);

        $requestData = Purify::clean($request->except('_token', '_method'));

        $basic        = (object)config('basic');
        $basicEmail   = $basic->sender_email;

        $name         = $requestData['name'];
        $email_from   = $requestData['email'];
        $subject      = $requestData['subject'];
        $message      = $requestData['message']."<br>Regards<br>".$name;
        $from         = $email_from;

        $headers      = "From: <$from> \r\n";
        $headers     .= "Reply-To: <$from> \r\n";
        $headers     .= "MIME-Version: 1.0\r\n";
        $headers     .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $to           = $basicEmail;

        if (@mail($to, $subject, $message, $headers)) {
            // echo 'Your message has been sent.';
        } else {
            //echo 'There was a problem sending the email.';
        }

        return back()->with('success', 'Mail has been sent');
    }

    public function getLink($getLink = null, $id)
    {
        $getData         = Content::findOrFail($id);
        $contentSection  = [$getData->name];
        $contentDetail   = ContentDetails::select('id', 'content_id', 'description', 'created_at')

            ->where('content_id', $getData->id)
            ->whereHas('content', function ($query) use ($contentSection) {
                return $query->whereIn('name', $contentSection);
            })
            ->with(['content:id,name',
                'content.contentMedia' => function ($q) {
                    $q->select(['content_id', 'description']);
                }])
            ->get()->groupBy('content.name');

        $title       = @$contentDetail[$getData->name][0]->description->title;
        $description = @$contentDetail[$getData->name][0]->description->description;

        return view($this->theme . 'getLink', compact('contentDetail', 'title', 'description'));
    }

    public function subscribe(Request $request)
    {
        $rules = [
            'email' => 'required|email|max:255|unique:subscribers'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect(url()->previous() . '#subscribe')->withErrors($validator);
        }

        $data         = new Subscriber();
        $data->email  = $request->email;
        $data->save();
        return redirect(url()->previous() . '#subscribe')->with('success', 'Subscribed Successfully');
    }

    public function language($code)
    {
        $language = Language::where('short_name', $code)->first();

        if (!$language) $code = 'US';
        session()->put('trans', $code);
        session()->put('rtl', $language ? $language->rtl : 0);
        
        return redirect()->back();
    }

}
