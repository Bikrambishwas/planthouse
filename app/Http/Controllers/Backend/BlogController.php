<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blogs;
use App\Repository\Backend\Blog\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    protected $blog;
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        $blogs = Blogs::orderBy('id','DESC')->get();
        return view('backend.blog.index',compact('blogs'));
    }

    public function add()
    {
        return view('backend.blog.add');
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
            $image->move(public_path('uploads/blog_images'), $filename);
            $validatedData['image'] = $filename;
          }

          $this->blog->store($validatedData);
          return response()->json(['message' => 'Added Successfully']);
    }

    public function edit($id)
    {
        $row = Blogs::find($id);
        return view('backend.blog.edit',compact('row'));
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
            $image->move(public_path('uploads/blog_images'), $filename);
            $validatedData['image'] = $filename;
          }
       }

       $this->blog->update($id,$validatedData);
       return response()->json(['message' => 'Updated Successfully']);
    }

    public function destroy($id)
    {
        $row = Blogs::find($id);
        $row->delete();
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
