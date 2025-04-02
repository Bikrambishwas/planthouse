<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use App\Models\Admin\Products;
use App\Repository\Backend\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = Products::orderBy('id','DESC')->get();
        return view('backend.product.index',compact('products'));
    }

    public function add()
    {
        $categories = Categories::where('parent', '0')->with('children')->get();
        return view('backend.product.add',compact('categories'));
    }

    public function store(Request $request)
    {

          $validator = Validator::make($request->all(),[
               'title' => 'required',
               'slug' => '',
               'image' => '',
               'short_description' => 'required',
               'description' => '',
               'status' => '',
               'seo_title' => '',
               'seo_description' => '',
               'show' => '',
               'gallery_images' => '',
               'type' => '',
               'details' => '',
               'marked_price' => '',
               'selling_price' => '',
               'category_id'=>''
          ]);

          if ($validator->fails()) {
              return response()->json([
                 'status' => 400,
                 'errors' => $validator->getMessageBag(),
                 'message' => 'Unable To Process'
              ]);
          }

          $validatedData = $validator->validated();
          $validatedData['slug'] = Str::slug($request->title);
          if ($request['image'] != null) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $original_name = preg_replace('/\s+/', '-', $image->getClientOriginalName());
            $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $original_name);
            $pure_name = preg_replace('/[^A-Za-z0-9\-]/', '', $without_ext);
            $filename = $pure_name . '-' . config('app.name') . '-' . time() . '.' . $extension;
            $image->move(public_path('uploads/product_images'), $filename);
            $validatedData['image'] = $filename;
          }


          $gallery_images = (array) $request->file('gallery_images');
          $uploadedImages = [];
          foreach ($gallery_images as $file) {
                $i_extension = $file->getClientOriginalExtension();
                $i_orignal_name = preg_replace('/\s+/', '-', $file->getClientOriginalName());
                $i_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $i_orignal_name);
                $i_pure_name = preg_replace('/[^A-Za-z0-9\-]/', '', $i_without_ext);
                $i_filename = $i_pure_name . '-' . config('app.name') . '-' . time()  . '.' . $i_extension;
                $file->move(public_path('uploads/product_images'), $i_filename);
                $uploadedImages[] = $i_filename;
          }

          $validatedData['gallery_images'] = json_encode($uploadedImages);

          if (!empty($request->input('plans'))) {
            $plans = $request->input('plans'); // Get the plans as an array

            foreach ($plans as $index => &$plan) {
                // Process Plan Image
                if ($request->hasFile("plans.$index.image")) {
                    $planImage = $request->file("plans.$index.image");
                    $planFilename = time() . '_' . $planImage->getClientOriginalName();
                    $planImage->storeAs('uploads/property_images', $planFilename, 'public');
                    $plan['image'] = $planFilename;
                }

                // Process Facilities Images (if any)
                if (!empty($plan['facilities'])) {
                    foreach ($plan['facilities'] as $facilityIndex => &$facility) {
                        if ($request->hasFile("plans.$index.facilities.$facilityIndex.image")) {
                            $facilityImage = $request->file("plans.$index.facilities.$facilityIndex.image");
                            $facilityFilename = time() . '_' . $facilityImage->getClientOriginalName();
                            $facilityImage->storeAs('uploads/property_images', $facilityFilename, 'public');
                            $facility['image'] = $facilityFilename;
                        }
                    }
                }
            }

            $plans = serialize($plans); // Store the plans in a serialized format
        }
          $validatedData['details'] = $plans;

          $this->product->store($validatedData);
          return response()->json(['message' => 'Added Successfully']);
    }

    public function edit($id)
    {
        $row = Products::find($id);
        $galleri_images = json_decode($row->gallery_images, true);
        $categories = Categories::where('parent', '0')->with('children')->get();
        return view('backend.product.edit',compact('row','galleri_images','categories'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'slug' => '',
            'image' => '',
            'short_description' => 'required',
            'description' => '',
            'status' => '',
            'seo_title' => '',
            'seo_description' => '',
            'show' => '',
            'gallery_images' => '',
            'type' => '',
               'details' => '',
                'marked_price' => '',
               'selling_price' => '',
               'category_id'=>''

       ]);

       if ($validator->fails()) {
           return response()->json([
              'status' => 400,
              'errors' => $validator->getMessageBag(),
              'message' => 'Unable To Process'
           ]);
       }

       $validatedData = $validator->validated();
       $product = Products::find($id);
       if ($request->id) {
        if ($request['image'] != null) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $original_name = preg_replace('/\s+/', '-', $image->getClientOriginalName());
            $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $original_name);
            $pure_name = preg_replace('/[^A-Za-z0-9\-]/', '', $without_ext);
            $filename = $pure_name . '-' . config('app.name') . '-' . time() . '.' . $extension;
            $image->move(public_path('uploads/product_images'), $filename);
            $validatedData['image'] = $filename;
          }
       }

           //  Delete Gallery Image
           $currentImages = json_decode($product->gallery_images, true) ?? [];
           if ($request->has('delete_images_filenames') && is_array($request->input('delete_images_filenames'))) {
               foreach ($request->input('delete_images_filenames') as $filenameToDelete) {
                   // Remove file from storage
                   File::delete(public_path('uploads/product_images/' . $filenameToDelete));
                   // Remove filename from the current images array
                  $currentImages = array_diff($currentImages, [$filenameToDelete]);
               }
           }

           $galleryImages = $currentImages;
           $G_images = (array) $request->file('gallery_images');
           foreach ($G_images as $G_image) {
               $G_extension = $G_image->getClientOriginalExtension();
               $G_original_name = preg_replace('/\s+/', '-', $G_image->getClientOriginalName());
               $G_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $G_original_name);
               $G_pure_name = preg_replace('/[^A-Za-z0-9\-]/', '', $G_without_ext);
               $G_filename = $G_pure_name . '-' . config('app.name') . '-' . time() . '.' . $G_extension;
               $G_image->move(public_path('uploads/product_images'), $G_filename);

               $galleryImages[] = $G_filename;  // Append to existing images

           }

          $galleryImages = array_values($galleryImages);
          $validatedData['gallery_image'] = json_encode($galleryImages);



       $this->product->update($id,$validatedData);
       return response()->json(['message' => 'Updated Successfully']);
    }

    public function destroy($id,Request $request)
    {
        $row = Products::find($id);
        $row->delete();
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
