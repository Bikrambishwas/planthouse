<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use App\Models\Admin\Products;
use App\Repository\Backend\Product\Product;
use Illuminate\Http\Request;
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
          dd($request->all());
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
               'details' => ''
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

          $this->product->store($validatedData);
          return response()->json(['message' => 'Added Successfully']);
    }

    public function edit($id)
    {
        $row = Products::find($id);
        return view('backend.product.edit',compact('row'));
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
               'details' => ''
       ]);

       if ($validator->fails()) {
           return response()->json([
              'status' => 400,
              'errors' => $validator->getMessageBag(),
              'message' => 'Unable To Process'
           ]);
       }

       $validatedData = $validator->validated();
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
