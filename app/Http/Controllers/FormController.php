<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Form;
use App\Models\Submit;
use Validator;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function index()
    {
        try {
            $forms = Submit::where('user_id', '=', auth()->user()->id)
                        ->orderBy('created_at', 'DESC')
                        ->with('forms')
                        ->get();

            return response()->json($forms, 200);
        } catch (\Exception $e) {
            return response()->json(["status" => false, "message" => $e->getMessage()], 500);
        }
    }
    
    public function store(Request $request)
    {
        ini_set('upload_max_filesize', '5G');
        ini_set('post_max_size', '5G');
        ini_set('memory_limit', '-1');

        $validator = Validator::make($request->all(), [
            'description.*' => 'required|string',
            'photo.*' => 'mimes:jpeg,png,jpg,gif|max:5120',
            'video.*' => 'mimetypes:video/mp4,video/x-msvideo,video/quicktime,video/x-ms-wmv,video/webm|max:5120',
        ]);
        
        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()->toArray()]);
        }


        try {
            $titles = $request->input('title');
            $descriptions = $request->input('description');
            $category_id = $request->input('category_id');
            $step_id = $request->input('step_id');

            $submit = new Submit();
            $submit->title = isset($titles[0]) ? $titles[0] : Carbon::now(); 
            $submit->user_id = Auth::user()->id;
            $submit->save();
        
            foreach ($titles as $key => $title) {
                $form = new Form();
                $form->title = $titles[$key];
                $form->description = $descriptions[$key];
                $form->user_id = Auth::user()->id;
                $form->step_id = $step_id[$key];
                $form->submit_id = $submit->id;
                $form->category_id = $category_id[$key];
        
                if ($request->hasFile('photo') && $request->file('photo')[$key]->isValid()) {
                    $photo = $request->file('photo')[$key];
                    $photoName = time() . '_' . $photo->getClientOriginalName();
                    $photoPath = $photo->storeAs('photo', $photoName);
                    $form->photo_path = $photoPath;
                }
        
                if ($request->hasFile('video') && $request->file('video')[$key]->isValid()) {
                    $video = $request->file('video')[$key];
                    $videoName = time() . '_' . $video->getClientOriginalName();
                    $videoPath = $video->storeAs('video', $videoName);
                    $form->video_path = $videoPath;
                }
        
                $form->save();
            }
        
            return response()->json(["status" => true, "message" => "Form submitted"], 200);
        } catch (\Exception $e) {
            return response()->json(["status" => false, "message" => $e->getMessage()], 500);
        }
    }
}
