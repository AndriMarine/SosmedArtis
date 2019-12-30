<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
    public function index(){
        return Agenda::all();
    }

    public function create(request $request){
        $agenda = new Agenda;
        $agenda->id = $request->id;
        $agenda->eo_id = $request->eo_id;
        $agenda->agenda_date = $request->agenda_date;
        $agenda->location = $request->location;
        $agenda->deal_price = $request->deal_price;
        $agenda->notes = $request->notes;
        $agenda->save();
    }

    public function update(request $request,$id){
        $id = $request->id;
        $eo_id = $request->eo_id;
        $agenda_date = $request->agenda_date;
        $location = $request->location;
        $deal_price = $request->deal_price;
        $notes = $request->notes;

        $agenda = Agenda::find($id);
        $agenda->id = $id;
        $agenda->eo_id = $eo_id;
        $agenda->agenda_date = $agenda_date;
        $agenda->location = $location;
        $agenda->deal_price = $deal_price;
        $agenda->notes = $notes;
        $agenda->save();

        return "Data Berhasil Di Update";
    }

    public function delete($id){
        $agenda = Agenda::find($id);
        $agenda->delete();

        return "Data Berhasil Di Hapus";
    }
}
