<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Pages;
use App\Repository\Backend\Page\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PageController extends Controller
{
    protected $page;
    public function __construct(Page $page)
    {
        $this->page = $page;
    }

    public function index()
    {
        $pages = Pages::orderBy('id','DESC')->get();
        return view('backend.page.index',compact('pages'));
    }

    public function add()
    {
        return view('backend.page.add');
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
            $image->move(public_path('uploads/page_images'), $filename);
            $validatedData['image'] = $filename;
          }

          $this->page->store($validatedData);
          return response()->json(['message' => 'Added Successfully']);
    }

    public function edit($id)
    {
        $row = Pages::find($id);
        return view('backend.page.edit',compact('row'));
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
            $image->move(public_path('uploads/page_images'), $filename);
            $validatedData['image'] = $filename;
          }
       }

       $this->page->update($id,$validatedData);
       return response()->json(['message' => 'Updated Successfully']);
    }

    public function destroy($id,Request $request)
    {
        $row = Pages::find($id);
        $row->delete();
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
