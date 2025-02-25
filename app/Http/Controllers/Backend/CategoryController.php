<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use App\Repository\Backend\Category\Category;
use App\Repository\Backend\Sitesetting\Sitesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    protected $category;
    protected $sitesetting;
    public function __construct(Category $category, Sitesetting $sitesetting)
    {
        $this->category = $category;
        $this->sitesetting = $sitesetting;
    }

    public function index(Request $request)
    {

        $categories = Categories::where('parent', '0')->with('children')->get();
        $parents = $this->category->get_parents();
        return view('backend.category.index', compact('categories', 'parents'));
    }

    //GET ROW DATA FOR EDIT SETTINGS
    public function get_category_row(Request $request)
    {
        $row = Categories::find($request->input('id'));
        return response()->json(['row' => $row]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => '',
            'parent' => 'required|numeric'
        ]);
        //VALIDATION FAIL
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        $validatedData = $validator->validated();
        $p_position = $request->input('parent');
        //MAKING SLUG
        $validatedData['slug'] = ($request->parent == 0) ? Str::slug($request->title) : NULL;

         if($p_position == 0){
               $latestPosition = Categories::where('parent', 0)->max('position');
               $newPosition = $latestPosition + 1;
               $validatedData['position'] = $newPosition;
         }elseif($p_position != 0)
         {
            $validatedData['position'] = $this->category->make_position($request->parent);
         }else{

         }

        $this->category->store($validatedData);
        return response()->json(['message' => 'Category has been added successfully']);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:features,slug,' . $id ,
            'title' => 'required',
            'parent' => 'required',
            'position' => '',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
                'message' => 'unable To update'
            ]);
        }
        $requestobj = $validator;
        $validatedData = $requestobj->validated();
        $this->category->update($id, $validatedData);
        return response()->json(['message' => 'Category has been updated successfully']);
    }

    public function destroy($id)
    {
        $category = $this->category->delete($id);
        return redirect()->back()
            ->with('success', 'Category has been deleted seccessfully');
    }

    public function ajax_position(Request $request)
    {
        $positions = $request->positions;
        //dd($positions);
        foreach ($positions as $position) :
            Categories::where('id', $position[0])->update(['position' => $position[1]]);
        endforeach;
        return response()->json(['message' => 'Position has been restored.']);
    }
}
