<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posting;

class PostingController extends Controller
{
    public function index(){
        return Posting::all();
    }

    public function create(request $request){
        $posting = new Posting;
        $posting->user_id = $request->user_id;
        $posting->description = $request->description;
        $posting->image_location = $request->image_location;
        $posting->video_post = $request->video_post;
        $posting->save();
    }

    public function update(request $request,$id){
        $user_id = $request->user_id;
        $description = $request->description;
        $image_location = $request->image_location;
        $video_post = $request->video_post;

        $posting = Posting::find($id);
        $posting->user_id = $user_id;
        $posting->description = $description;
        $posting->image_location = $image_location;
        $posting->video_post = $video_post;
        $posting->save();

        return "Data Berhasil Di Update";
    }

    public function delete($id){
        $posting = Posting::find($id);
        $posting->delete();

        return "Data Berhasil Di Hapus";
    }
}
