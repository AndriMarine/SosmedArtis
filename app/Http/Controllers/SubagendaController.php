<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subagenda;

class SubagendaController extends Controller
{
   public function index(){
        return Subagenda::all();
    }

    public function create(request $request){
        $subAgenda = new Subagenda;
        $subAgenda->id = $request->id;
        $subAgenda->eo_id = $request->eo_id;
        $subAgenda->artis_id = $request->artis_id;
        $subAgenda->id_posting = $request->id_posting;
        $subAgenda->rating = $request->rating;
        $subAgenda->status_connect = $request->status_connect;
        $subAgenda->save();
    }

    public function update(request $request,$id){
        $id = $request->id;
        $eo_id = $request->eo_id;
        $artis_id = $request->artis_id;
        $id_posting = $request->id_posting;
        $rating = $request->rating;
        $rating = $request->status_connect;

        $subAgenda = Subagenda::find($id);
        $subAgenda->id = $id;
        $subAgenda->eo_id = $eo_id;
        $subAgenda->artis_id = $artis_id;
        $subAgenda->id_posting = $id_posting;
        $subAgenda->rating = $rating;
        $subAgenda->status_connect = $status_connect;
        $subAgenda->save();

        return "Data Berhasil Di Update";
    }

    public function delete($id){
        $subAgenda = Subagenda::find($id);
        $subAgenda->delete();

        return "Data Berhasil Di Hapus";
    }
}
