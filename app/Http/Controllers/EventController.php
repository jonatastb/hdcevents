<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        
        return view('events.events', ['events' => $events]);
    }

    public function new()
    {
        return view('events/new');
    }

    public function store(Request $request)
    {

        if ($event->description == NULL || $event->title == NULL) {
            return redirect('events/new')->with('msg','Campos em branco!');
        }

        $event = new Event;

        $event->title       = $request->title;
        $event->city        = $request->city;
        $event->private     = $request->private;
        $event->description = $request->description;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName()) . strtotime('now') . '.' . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();
        
        return redirect('events/events')->with('msg','Evento criado com sucesso!');
    }

    public function show($id){

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
        
    }

    $valor += ($BN2 / 30) * (($HL2 == "TOALHAS DE BANHO" || $HL2 == "LINHA ALTA" || $HL2 == "CUSTO BAIXO" || $HL2 == "COORDENADOS") ? 105 : ($HL2 == "TRAVESSEIROS" || $HL2 == "RANKING" ? 90 : ($HL2 == "MIX" ? 90 : 0)));
}
