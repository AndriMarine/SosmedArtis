<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(){
        return Profile::all();
    }

    public function create(request $request){
        $profile = new Profile;
        $profile->full_name = $request->full_name;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->email = $request->email;
        $profile->date_of_birtdh = $request->date_of_birtdh;
        $profile->gender = $request->gender;
        $profile->speciality = $request->speciality;
        $profile->role = $request->role;
        $profile->phone_number = $request->phone_number;
        $profile->save();
    }

    public function update(request $request,$id){
        $profile = $request->full_name;
        $address = $request->address;
        $city = $request->city;
        $email = $request->email;
        $date_of_birtdh = $request->date_of_birtdh;
        $gender = $request->gender;
        $speciality = $request->speciality;
        $role = $request->role;
        $phone_number = $request->phone_number;

        $profile = Profile::find($id);
        $profile->full_name = $full_name;
        $profile->address = $address;
        $profile->city = $city;
        $profile->email = $email;
        $profile->date_of_birtdh = $date_of_birtdh;
        $profile->gender = $gender;
        $profile->speciality = $speciality;
        $profile->role = $role;
        $profile->phone_number = $phone_number;
        $profile->save();

        return "Data Berhasil Di Update";
    }

    public function delete($id){
        $profile = Profile::find($id);
        $profile->delete();

        return "Data Berhasil Di Hapus";
    }
}
