<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menus;
use App\Models\Admin\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index($id  , Request $request)
    {
        $menus = Menus::all();
        $MenuID = $id;
        $pages = Pages::select('id','title','url')->get();
        if ($id != 0) {
            $row = Menus::find($id);
            $menuStructure = unserialize($row->menu_structure);
            $menuStructure = json_decode($menuStructure, true);
            // foreach ($menuStructure as $value) {
            //     dd($value);
            // }
            return view('backend.menu.index',compact('menus','MenuID','row','menuStructure','pages'));
        }

        return view('backend.menu.index',compact('menus','MenuID','pages'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                 'status' => 400,
                 'errors' => $validator->getMessageBag(),
                 'message' => 'Unable To Process'
            ]);
        }

        $data = new Menus();
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->save();
        return response()->json(['menu_id' => $data->id, 'message' => 'Added Successfully']);
    }

    public function update($id, Request $request)
    {
         $row = Menus::find($id);
         $row->title = $request->title;
         $row->slug = Str::slug($request->title);
         $row->menu_structure = serialize($request->input('menu_structure'));
         if ($request->show != null) {
            $row->show = $request->show;
            Menus::where('id', '!=', $id)->update(['show' => 0]);
         }else{
            $row->show = 0;
         }

         $row->save();
         return response()->json(['message' => 'Updated Successfully']);
    }

    public function destroy($id)
    {
        $row = Menus::find($id);
        $row->delete();
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
