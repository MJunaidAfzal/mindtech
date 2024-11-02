<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $data ['title'] = 'Events';
        $data ['heading'] = 'Participer a un événement,';
        $data ['events'] = Event::orderByDesc('id')->paginate(5);
        return view('dashboard.pages.events.list',$data);
    }

    public function addEvents()
    {
        $data ['title'] = 'Add Events';
        $data ['heading'] = 'Ajouter de nouveaux événements';
        return view('dashboard.pages.events.create',$data);
    }

    public function eventStore(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'number_of_place' => 'required',
            'start' => 'required',
            // 'end' => 'required',
            'status' => 'required',
            'place' => 'required',
        ], [
            'user_id.required' => "L'identifiant de l'utilisateur est requis.",
            'title.required' => "Le nom est requis.",
            'number_of_place.required' => "Le nombre de places est requis.",
            'start.required' => "La date de l'événement est requise.",
            // 'end.required' => "la date de fin de l'événement est requise.",
            'status.required' => "Le statut est requis.",
            'place.required' => "Le lieu est requis.",
        ]);

        $event = Event::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'number_of_place' => $request->number_of_place,
            'start' => $request->start,
            'end' => $request->end,
            'status' => $request->status,
            'place' => $request->place,
        ]);

        if($event){
            return redirect()->route('events.index')->with('success', 'Événement créé avec succès !');
        }
        else{
            return redirect()->back()->with('error', 'Erreur lors de la création de lévénement !');
        }
    }

    public function editEvents($title)
    {
        $data ['title'] = 'Edit Events';
        $data ['heading'] = 'modifier lévénement '. $title;
        $data ['event'] = Event::where('title',$title)->first();
        return view('dashboard.pages.events.edit',$data);
    }

    public function viewEvents($title)
    {
        $data ['title'] = 'View Events';
        $data ['heading'] = 'Afficher les événements '. $title;
        $data ['event'] = Event::where('title',$title)->first();
        return view('dashboard.pages.events.view',$data);
    }

    public function eventUpdate(Request $request, $title)
    {
        $event = Event::where('title',$title)->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'number_of_place' => $request->number_of_place,
            'start' => $request->start,
            'end' => $request->end,
            'status' => $request->status,
            'place' => $request->place,
        ]);

        if($event){
            return redirect()->route('events.index')->with('success', 'Événement mis à jour avec succès !');
        }
        else{
            return redirect()->back()->with('error', 'Erreur Quelque chose sest mal passé!');
        }
    }

    public function destroy($title)
    {
        $event = Event::where('title', $title)->first();

        if (!$event) {
            return redirect()->route('events.index')->with('error', 'Événement introuvable.');
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Événement supprimé avec succès.');
    }


}
