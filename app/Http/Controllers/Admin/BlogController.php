<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogCategoryDetails;
use App\Models\BlogDetails;
use App\Models\Content;
use App\Models\ContentDetails;
use App\Models\ContentMedia;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Configure;


use Illuminate\Support\Facades\Validator;
use Stevebauman\Purify\Facades\Purify;

class BlogController extends Controller
{
    // Admin Blog Manage
    public function categoryList()
    {
        $manageBlogCategory = BlogCategory::with('details')->latest()->get();
        return view('admin.blog.categoryList', compact('manageBlogCategory'));
    }

    public function blogCategoryCreate()
    {
        $languages = Language::all();
        return view('admin.blog.blogCategoryCreate', compact('languages'));
    }

    public function blogCategoryStore(Request $request, $language)
    {

        $purifiedData = Purify::clean($request->except('_token', '_method'));

        $rules = [
            'name.*' => 'required|max:100',
        ];

        $message = [
            'name.*.required' => 'Category name field is required',
        ];

        $validate = Validator::make($purifiedData, $rules, $message);

        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $blogCategory = new BlogCategory();
        $blogCategory->save();

        $blogCategory->details()->create([
            'language_id' => $language,
            'name' => $purifiedData["name"][$language],
        ]);

        return redirect()->route('admin.blogCategory')->with('success', 'Blog Category Successfully Saved');

    }

    public function blogCategoryEdit($id)
    {
        $languages = Language::all();
        $blogCategoryDetails = BlogCategoryDetails::with('category')->where('blog_category_id', $id)->get()->groupBy('language_id');
        return view('admin.blog.blogCategoryEdit', compact('languages', 'blogCategoryDetails', 'id'));
    }

    public function blogCategoryUpdate(Request $request, $id, $language_id)
    {

        $purifiedData = Purify::clean($request->except('_token', '_method'));

        $rules = [
            'name.*' => 'required|max:100',
        ];

        $message = [
            'name.*.required' => 'Category name field is required',
        ];

        $validate = Validator::make($purifiedData, $rules, $message);

        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->save();

        $blogCategory->details()->updateOrCreate([
            'language_id' => $language_id
        ],
            [
                'name' => $purifiedData["name"][$language_id],
            ]
        );

        return redirect()->route('admin.blogCategory')->with('success', 'Blog Category Successfully Updated');
    }

    public function blogCategoryDelete($id)
    {
        $blogCategory = BlogCategory::findOrFail($id);
        $blogCategory->delete();
        return back()->with('success', 'Blog Category has been deleted');
    }

    public function blogList()
    {
        $data['blogs'] = Blog::with('details', 'category.details')->latest()->get();
        return view('admin.blog.blogList', $data);
    }

    public function blogCreate()
    {

        $languages = Language::all();
        $data['blogCategory'] = BlogCategory::with('details')->get();
        return view('admin.blog.blogCreate', $data, compact('languages'));
    }


    public function blogStore(Request $request, $language = null)
    {

        $purifiedData = Purify::clean($request->except('image', '_token', '_method'));

        if ($request->has('image')) {
            $purifiedData['image'] = $request->image;
        }

        $rules = [
            'blog_category_id' => 'required',
            'author.*' => 'required|max:50',
            'title.*' => 'required|max:191',
            'details.*' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ];
        $message = [
            'blog_category_id.required' => 'Please select blog category',
            'author.*.max' => 'This field may not be greater than :max characters',
            'author.*.required' => 'This field is required',
            'title.*.required' => 'This field is required',
            'details.*.required' => 'This field is required',
            'image.required' => 'Image is required'
        ];

        $validate = Validator::make($purifiedData, $rules, $message);

        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $blog = new Blog();

        $blog->blog_category_id = $request->blog_category_id;


        if ($request->hasFile('image')) {
            try {
                $blog->image = $this->uploadImage($purifiedData['image'], config('location.blog.path'), config('location.blog.size'));
            } catch (\Exception $exp) {
                return back()->with('error', 'Image could not be uploaded.');
            }
        }


        $blog->save();


        $blog->details()->create([

            'language_id' => $language,
            'author' => $purifiedData["author"][$language],
            'title' => $purifiedData["title"][$language],
            'details' => $purifiedData["details"][$language],
        ]);

        return redirect()->route('admin.blogList')->with('success', 'Blog Successfully Saved');
    }


    public function blogEdit($id)
    {
        $languages = Language::all();
        $blogDetails = BlogDetails::with('blog')->where('blog_id', $id)->get()->groupBy('language_id');
        $blogCategory = BlogCategory::with('details')->get();

        return view('admin.blog.blogEdit', compact('languages', 'blogDetails', 'blogCategory', 'id'));
    }


    public function blogUpdate(Request $request, $id, $language_id)
    {
        $purifiedData = Purify::clean($request->except('image', '_token', '_method'));

        if ($request->has('image')) {
            $purifiedData['image'] = $request->image;
        }

        $rules = [
            'blog_category_id' => 'sometimes|required',
            'author.*' => 'required|max:50',
            'title.*' => 'required|max:191',
            'details.*' => 'required',
            'image' => 'sometimes|required|mimes:jpg,jpeg,png'
        ];
        $message = [
            'blog_category_id.required' => 'Please select blog category',
            'author.*.max' => 'This field may not be greater than :max characters',
            'author.*.required' => 'This field is required',
            'title.*.required' => 'This field is required',
            'details.*.required' => 'This field is required',
            'image.required' => 'Image is required'
        ];

        $validate = Validator::make($purifiedData, $rules, $message);

        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $blog = Blog::findOrFail($id);

        if ($request->has('blog_category_id')) {
            $blog->blog_category_id = $request->blog_category_id;
        }


        if ($request->hasFile('image')) {
            try {
                $blog->image = $this->uploadImage($purifiedData['image'], config('location.blog.path'), config('location.blog.size'), $blog->image);
            } catch (\Exception $exp) {
                return back()->with('error', 'Image could not be uploaded.');
            }
        }

        $blog->save();

        $blog->details()->updateOrCreate([
            'language_id' => $language_id
        ],
            [
                'author' => $purifiedData["author"][$language_id],
                'title' => $purifiedData["title"][$language_id],
                'details' => $purifiedData["details"][$language_id],
            ]
        );

        return redirect()->route('admin.blogList')->with('success', 'Blog Successfully Updated');

    }


    public function blogDelete($id)
    {
        $blog = Blog::findOrFail($id);
        $old_image = $blog->image;
        $location = config('location.blog.path');

        if (!empty($old_image)) {
            unlink($location . '/' . $old_image);
        }

        $blog->delete();
        return back()->with('success', 'Blog has been deleted');
    }
}
