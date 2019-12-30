<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;

class PortofolioController extends Controller
{
    public function index(){
        return Portofolio::all();
    }

    public function create(request $request){
        $portofolio = new Portofolio;
        $portofolio->user_id = $request->user_id;
        $portofolio->profile = $request->profile;
        $portofolio->school = $request->school;
        $portofolio->date_graduation = $request->date_graduation;
        $portofolio->skills = $request->skills;
        $portofolio->certification = $request->certification;
        $portofolio->hobbies = $request->hobbies;
        $portofolio->image = $request->image;
        $portofolio->save();
    }

    public function update(request $request,$id){
        $user_id = $request->user_id;
        $profile = $request->profile;
        $school = $request->school;
        $date_graduation = $request->date_graduation;
        $skills = $request->skills;
        $certification = $request->certification;
        $hobbies = $request->hobbies;
        $image = $request->image;

        $portofolio = Portofolio::find($id);
        $portofolio->user_id = $user_id;
        $portofolio->profile = $profile;
        $portofolio->school = $school;
        $portofolio->date_graduation = $date_graduation;
        $portofolio->skills = $skills;
        $portofolio->certification = $certification;
        $portofolio->hobbies = $hobbies;
        $portofolio->image = $image;

        return "Data Berhasil Di Update";
    }

    public function delete($id){
        $portofolio = Portofolio::find($id);
        $portofolio->delete();

        return "Data Berhasil Di Hapus";
    }
}
