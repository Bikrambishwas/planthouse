<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SitesettingRequest;
use App\Models\Admin\Sitesettings;
use App\Repository\Backend\Sitesetting\Sitesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SitesettingController extends Controller
{
    protected $sitesetting;
    public function __construct(Sitesetting $sitesetting)
    {
         $this->sitesetting = $sitesetting;
    }

    public function index()
    {

        $general_setting = Sitesettings::where('group', 'General Setting')->orderBy('position', 'ASC')->get();
        $social_media = Sitesettings::where('group', 'Social Media')->orderBy('position', 'ASC')->get();
        $extra_text = Sitesettings::where('group', 'Extra Text')->orderBy('position', 'ASC')->get();
        $introduction = Sitesettings::where('group', 'Introduction')->orderBy('position', 'ASC')->get();
        $imp_links = Sitesettings::where('group', 'Important Links')->orderBy('position', 'ASC')->get();
        return view('backend.sitesetting.index', compact('general_setting', 'social_media', 'extra_text','introduction','imp_links'));
    }

    //GET ROW DATA FOR EDIT SETTINGS
    public function get_row_data(Request $request)
    {
        $row = Sitesettings::find($request->input('id'));
        return response()->json(['row' => $row]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:sitesettings,slug',
            'meta_key' => 'required',
            'meta_value' => 'required',
            'group' => 'required',
            'type' => 'required',
            'position' => '',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->getMessageBag(),
            ]);
        }


        $requestobj = $validator;
        $validatedData = $requestobj->validated();
        $maxposition = Sitesettings::where('group','=', $request->group)->max('position');
        $validatedData['position'] = $maxposition + 1;
        if ($request->hasFile('meta_value')) {
            $file = $request->meta_value;
            $newName = time() . $file->getClientOriginalName($file);
            $file->move('uploads/sitesettingimages', $newName);
            $validatedData['meta_value'] = 'uploads/sitesettingimages/' . $newName;
        }
        // $sitesetting->save();
        $this->sitesetting->store($validatedData);
        // return redirect()->back()
        //     ->with('success', 'New sitesetting is been added successfully');
        return response()->json(['message'=> 'New sitesetting is been added successfully']);
    }


    public function update($id, Request $request)
    {
        $requestobj = app(SitesettingRequest::class);
        $validatedData = $requestobj->validated();
        if ($request->id) {
            if ($request['meta_value'] != null) {
                if ($request->hasFile('meta_value')) {
                    $file = $request->meta_value;
                    $newName = time() . $file->getClientOriginalName($file);
                    $file->move('uploads/sitesettingimages', $newName);
                    $validatedData['meta_value'] = 'uploads/sitesettingimages/' . $newName;
                }
            }
        }
        $this->sitesetting->update($id, $validatedData);
        return redirect()->back()
            ->with('success', 'setting is updated succesfully');
    }
}
