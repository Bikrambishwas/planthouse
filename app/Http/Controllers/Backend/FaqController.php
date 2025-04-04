<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Faqs;
use App\Repository\Backend\Faq\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    protected $faq;
    public function __construct(Faq $faq)
    {
          $this->faq = $faq;
    }

    public function index()
    {
        $faqs = Faqs::orderBy('position','ASC')->get();
        return view('backend.faq.index',compact('faqs'));
    }

    public function get_faq_row(Request $request)
    {
        $row = Faqs::find($request->input('id'));
        return response()->json(['row' => $row]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required',
            'status' => '',
            'position' => ''
        ]);

        //VALIDATION FAIL
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->getMessageBag(),
                'message' => 'Unable To Proccess'
            ]);
        }
        $validatedData = $validator->validated();
        $maxpostion = Faqs::max('position');
        $validatedData['position'] = $maxpostion + 1;
        $this->faq->store($validatedData);
        return response()->json(['message' => 'Added successfully']);
    }


    public function update($id,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required',
            'status' => '',
            'position' => ''
        ]);

        //VALIDATION FAIL
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->getMessageBag(),
                'message' => 'Unable To Proccess'
            ]);
        }
        $validatedData = $validator->validated();
        $this->faq->update($id,$validatedData);
        return response()->json(['message' => 'Updated successfully']);
    }

    public function position(Request $request)
    {
        $positions = $request->positions;
        foreach ($positions as $position) :
            Faqs::where('id', $position[0])->update(['position' => $position[1]]);
        endforeach;

        return response()->json(['message' => 'position has been sorted.']);
    }

    public function destroy($id,Request $request)
    {
        $row = Faqs::find($id);
        $row->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
