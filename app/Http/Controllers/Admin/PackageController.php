<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload;
use App\Models\Content;
use App\Models\ContentDetails;
use App\Models\ContentMedia;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\Configure;
use App\Models\Package;
use App\Models\PackageDetails;

use Illuminate\Support\Facades\Validator;
use Stevebauman\Purify\Facades\Purify;


class PackageController extends Controller
{
    use Upload;

    public function package()
    {   
        $data['Packages'] = Package::with('details')->latest()->get();
        return view('admin.package.index', $data);
    }

    public function packageCreate()
    {
        $languages = Language::all();
        $control = Configure::firstOrNew();
        return view('admin.package.create', compact('languages', 'control'));
    }

    public function packageStore(Request $request, $language = null)
    {
        
        $purifiedData = Purify::clean($request->except('image', '_token', '_method'));

        if ($request->has('image')) {
            $purifiedData['image'] = $request->image;
        }

        $rules = [
            'title.*' => 'required',
            'price' => 'sometimes|required|numeric|min:0',
            'expiry_time' => 'sometimes|required_without:expiry_time_unlimited|integer|not_in:0',
            'expiry_time_unlimited' => 'sometimes|required_without:expiry_time|integer|in:-1',
            'is_image' => 'sometimes|required|boolean',
            'is_video' => 'sometimes|required|boolean',
            'is_amenities' => 'sometimes|required|boolean',
            'is_product' => 'sometimes|required|boolean',
            'is_business_hour' => 'sometimes|required|boolean',
            'no_of_listing' => 'sometimes|required_without:no_of_listing_unlimited|integer|not_in:0',
            'no_of_listing_unlimited' => 'sometimes|required_without:no_of_listing|integer|in:-1',
            'no_of_img_per_listing' => 'exclude_if:is_image,0|sometimes|required_without:no_of_img_per_listing_unlimited|integer|not_in:0',
            'no_of_img_per_listing_unlimited' => 'exclude_if:is_image,0|sometimes|required_without:no_of_img_per_listing|integer|in:-1',
            'no_of_amenities_per_listing' => 'exclude_if:is_amenities,0|sometimes|required_without:no_of_amenities_per_listing_unlimited|integer|not_in:0',
            'no_of_amenities_per_listing_unlimited' => 'exclude_if:is_amenities,0|sometimes|required_without:no_of_amenities_per_listing|integer|in:-1',
            'no_of_product' => 'exclude_if:is_product,0|sometimes|required_without:no_of_product_unlimited|integer|not_in:0',
            'no_of_product_unlimited' => 'exclude_if:is_product,0|sometimes|required_without:no_of_product|integer|in:-1',
            'no_of_img_per_product' => 'exclude_if:is_product,0|sometimes|required_without:no_of_img_per_product_unlimited|integer|not_in:0',
            'no_of_img_per_product_unlimited' => 'exclude_if:is_product,0|sometimes|required_without:no_of_img_per_product|integer|in:-1',
            'status' => 'sometimes|required',
            'image' => 'sometimes|required|mimes:jpg,jpeg,png'
        ];

        $message = [
            'title.*.required' => 'Package title is required',
            'price.required' => 'Price field is required',
            'expiry_time.required' => 'Package expiry field is required',
            'is_image.required' => 'please select image field',
            'is_video.required' => 'please select video field',
            'is_amenities.required' => 'please select amenities field',
            'is_product.required' => 'please select product field',
            'is_business_hour.required' => 'please select business hour field',
            'no_of_listing.required_without' => 'No of listing field is required',
            'no_of_listing_unlimited.required_without' => 'No of listing field is required',
            'no_of_img_per_listing.required_without' => 'No of img per listing is required',
            'no_of_img_per_listing_unlimited.required_without' => 'No of img per listing is required',
            'no_of_amenities_per_listing.required_without' => 'No of amenities per listing is required',
            'no_of_amenities_per_listing_unlimited.required_without' => 'No of amenities per listing is required',
            'no_of_product.required_without' => 'No of product is required',
            'no_of_product_unlimited.required_without' => 'No of product is required',
            'no_of_img_per_product.required_without' => 'No of img per product is required',
            'no_of_img_per_product_unlimited.required_without' => 'No of img per product is required',
            'status.required' => 'Status is required',
            'image.required' => 'Image is required',
        ];

        $validate = Validator::make($purifiedData, $rules, $message);

        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $package = new Package();
        $package->price = $request->price;
        
        $package->expiry_time_type = isset($request->expiry_time_unlimited) && $request->expiry_time_unlimited == -1 ? null : $request->expiry_time_type;

        if ($request->expiry_time) {
            $package->expiry_time = $request->expiry_time;
            if ($request->expiry_time == 1 && $request->expiry_time_type == 'Days') {
                $package->expiry_time_type = 'Day';
            }elseif($request->expiry_time == 1 && $request->expiry_time_type == 'Months'){
                $package->expiry_time_type = 'Month';
            }elseif($request->expiry_time == 1 && $request->expiry_time_type == 'Years'){
                $package->expiry_time_type = 'Year';
            }else{
                $package->expiry_time_type = $request->expiry_time_type;
            }
        }

        $package->is_image = $request->is_image;
        $package->is_video = $request->is_video;
        $package->is_amenities = $request->is_amenities;
        $package->is_product = $request->is_product;
        $package->is_business_hour = $request->is_business_hour;
        $package->no_of_listing = isset($request->no_of_listing_unlimited) && $request->no_of_listing_unlimited == -1 ? null : $request->no_of_listing;
        $package->no_of_img_per_listing = isset($request->no_of_img_per_listing_unlimited) && $request->no_of_img_per_listing_unlimited == -1 && $request->is_image == 0 ? null : $request->no_of_img_per_listing;
        $package->no_of_amenities_per_listing = isset($request->no_of_amenities_per_listing_unlimited) && $request->no_of_amenities_per_listing_unlimited == -1 && $request->is_amenities == 0 ? null : $request->no_of_amenities_per_listing;
        $package->no_of_product = isset($request->no_of_product_unlimited) && $request->no_of_product_unlimited == -1 && $request->is_product == 0 ? null : $request->no_of_product;
        $package->no_of_img_per_product = isset($request->no_of_img_per_product_unlimited) && $request->no_of_img_per_product_unlimited == -1 && $request->is_product == 0 ? null : $request->no_of_img_per_product;
        $package->status = $request->status;

        if ($request->hasFile('image')) {
            try {
                $package->image = $this->uploadImage($purifiedData['image'], config('location.package.path'), config('location.package.size'));
            } catch (\Exception $exp) {
                return back()->with('error', 'Image could not be uploaded.');
            }
        }

        $package->save();

        $package->details()->create([
            'language_id' => $language,
            'title' => $purifiedData["title"][$language],
        ]);

        return redirect()->route('admin.package')->with('success', 'Package Saved Successfully.');
    }

    public function packageEdit($id)
    {
        $languages = Language::all();
        $packageDetails = PackageDetails::with('package')->where('package_id', $id)->get()->groupBy('language_id');

        return view('admin.package.edit', compact('languages', 'packageDetails', 'id'));
    }

    public function packageDelete($id){
        $package = Package::findOrFail($id);
        $old_image = $package->image;
        $location = config('location.package.path');

        if (!empty($old_image)) {
            unlink($location . '/' . $old_image);
        }

        $package->delete();
        return back()->with('success', 'Package has been deleted');
    }

    public function packageUpdate(Request $request, $id, $language_id){

        $purifiedData = Purify::clean($request->except('image', '_token', '_method'));

        if ($request->has('image')) {
            $purifiedData['image'] = $request->image;
        }

        $rules = [
            'title.*' => 'required',
            'price' => 'sometimes|required|numeric|min:0',
            'expiry_time' => 'sometimes|required_without:expiry_time_unlimited|integer|not_in:0',
            'expiry_time_unlimited' => 'sometimes|required_without:expiry_time|integer|in:-1',
            'is_image' => 'sometimes|required|boolean',
            'is_video' => 'sometimes|required|boolean',
            'is_amenities' => 'sometimes|required|boolean',
            'is_product' => 'sometimes|required|boolean',
            'is_business_hour' => 'sometimes|required|boolean',
            'no_of_listing' => 'sometimes|required_without:no_of_listing_unlimited|integer|not_in:0',
            'no_of_listing_unlimited' => 'sometimes|required_without:no_of_listing|integer|in:-1',
            'no_of_img_per_listing' => 'exclude_if:is_image,0|sometimes|required_without:no_of_img_per_listing_unlimited|integer|not_in:0',
            'no_of_img_per_listing_unlimited' => 'exclude_if:is_image,0|sometimes|required_without:no_of_img_per_listing|integer|in:-1',
            'no_of_amenities_per_listing' => 'exclude_if:is_amenities,0|sometimes|required_without:no_of_amenities_per_listing_unlimited|integer|not_in:0',
            'no_of_amenities_per_listing_unlimited' => 'exclude_if:is_amenities,0|sometimes|required_without:no_of_amenities_per_listing|integer|in:-1',
            'no_of_product' => 'exclude_if:is_product,0|sometimes|required_without:no_of_product_unlimited|integer|not_in:0',
            'no_of_product_unlimited' => 'exclude_if:is_product,0|sometimes|required_without:no_of_product|integer|in:-1',
            'no_of_img_per_product' => 'exclude_if:is_product,0|sometimes|required_without:no_of_img_per_product_unlimited|integer|not_in:0',
            'no_of_img_per_product_unlimited' => 'exclude_if:is_product,0|sometimes|required_without:no_of_img_per_product|integer|in:-1',
            'status' => 'sometimes|required',
            'image' => 'sometimes|required|mimes:jpg,jpeg,png'
        ];

        $message = [
            'title.*.required' => 'Package title is required',
            'price.required' => 'Price field is required',
            'expiry_time.required' => 'Package expiry field is required',
            'is_image.required' => 'please select image field',
            'is_video.required' => 'please select video field',
            'is_amenities.required' => 'please select amenities field',
            'is_product.required' => 'please select product field',
            'is_business_hour.required' => 'please select business hour field',
            'no_of_listing.required_without' => 'No of listing field is required',
            'no_of_listing_unlimited.required_without' => 'No of listing field is required',
            'no_of_img_per_listing.required_without' => 'No of img per listing is required',
            'no_of_img_per_listing_unlimited.required_without' => 'No of img per listing is required',
            'no_of_amenities_per_listing.required_without' => 'No of amenities per listing is required',
            'no_of_amenities_per_listing_unlimited.required_without' => 'No of amenities per listing is required',
            'no_of_product.required_without' => 'No of product is required',
            'no_of_product_unlimited.required_without' => 'No of product is required',
            'no_of_img_per_product.required_without' => 'No of img per product is required',
            'no_of_img_per_product_unlimited.required_without' => 'No of img per product is required',
            'status.required' => 'Status is required',
            'image.required' => 'Image is required',
        ];

        $validate = Validator::make($purifiedData, $rules, $message);

        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $package = Package::findOrFail($id);

        if ($request->hasFile('image')) {
            try {
                $package->image = $this->uploadImage($purifiedData['image'], config('location.package.path'), config('location.package.size'));
            } catch (\Exception $exp) {
                return back()->with('error', 'Image could not be uploaded.');
            }
        }

        $package->price = $request->price;
        
        $package->expiry_time_type = isset($request->expiry_time_unlimited) && $request->expiry_time_unlimited == -1 ? null : $request->expiry_time_type;

        if ($request->expiry_time) {
            $package->expiry_time = $request->expiry_time;
            if ($request->expiry_time == 1 && $request->expiry_time_type == 'Days') {
                $package->expiry_time_type = 'Day';
            }elseif($request->expiry_time == 1 && $request->expiry_time_type == 'Months'){
                $package->expiry_time_type = 'Month';
            }elseif($request->expiry_time == 1 && $request->expiry_time_type == 'Years'){
                $package->expiry_time_type = 'Year';
            }else{
                $package->expiry_time_type = $request->expiry_time_type;
            }
        }

        $package->is_image = $request->is_image;
        $package->is_video = $request->is_video;
        $package->is_amenities = $request->is_amenities;
        $package->is_product = $request->is_product;
        $package->is_business_hour = $request->is_business_hour;
        $package->no_of_listing = isset($request->no_of_listing_unlimited) && $request->no_of_listing_unlimited == -1 ? null : $request->no_of_listing;
        $package->no_of_img_per_listing = isset($request->no_of_img_per_listing_unlimited) && $request->no_of_img_per_listing_unlimited == -1 && $request->is_image == 0 ? null : $request->no_of_img_per_listing;
        $package->no_of_amenities_per_listing = isset($request->no_of_amenities_per_listing_unlimited) && $request->no_of_amenities_per_listing_unlimited == -1 && $request->is_amenities == 0 ? null : $request->no_of_amenities_per_listing;
        $package->no_of_product = isset($request->no_of_product_unlimited) && $request->no_of_product_unlimited == -1 && $request->is_product == 0 ? null : $request->no_of_product;
        $package->no_of_img_per_product = isset($request->no_of_img_per_product_unlimited) && $request->no_of_img_per_product_unlimited == -1 && $request->is_product == 0 ? null : $request->no_of_img_per_product;
        $package->status = $request->status;

        if ($request->hasFile('image')) {
            try {
                $package->image = $this->uploadImage($purifiedData['image'], config('location.package.path'), config('location.package.size'));
            } catch (\Exception $exp) {
                return back()->with('error', 'Image could not be uploaded.');
            }
        }

        $package->save();

        $package->details()->updateOrCreate([
            'language_id' => $language_id
        ],
            [
                'title' => $purifiedData["title"][$language_id],
            ]
        );

        return redirect()->route('admin.package')->with('success', 'Package Update Successfully.');
        

    }
}
