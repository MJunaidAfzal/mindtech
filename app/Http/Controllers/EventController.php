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
            'name' => 'required',
            'number_of_place' => 'required',
            'event_date' => 'required',
            'status' => 'required',
            'place' => 'required',
        ], [
            'user_id.required' => "L'identifiant de l'utilisateur est requis.",
            'name.required' => "Le nom est requis.",
            'number_of_place.required' => "Le nombre de places est requis.",
            'event_date.required' => "La date de l'événement est requise.",
            'status.required' => "Le statut est requis.",
            'place.required' => "Le lieu est requis.",
        ]);

        $event = Event::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'number_of_place' => $request->number_of_place,
            'event_date' => $request->event_date,
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

    public function editEvents($name)
    {
        $data ['title'] = 'Edit Events';
        $data ['heading'] = 'modifier lévénement '. $name;
        $data ['event'] = Event::where('name',$name)->first();
        return view('dashboard.pages.events.edit',$data);
    }

    public function viewEvents($name)
    {
        $data ['title'] = 'View Events';
        $data ['heading'] = 'Afficher les événements '. $name;
        $data ['event'] = Event::where('name',$name)->first();
        return view('dashboard.pages.events.view',$data);
    }

    public function eventUpdate(Request $request, $name)
    {
        $event = Event::where('name',$name)->update([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'number_of_place' => $request->number_of_place,
            'event_date' => $request->event_date,
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

    public function destroy($name)
    {
        $event = Event::where('name', $name)->first();

        if (!$event) {
            return redirect()->route('events.index')->with('error', 'Événement introuvable.');
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Événement supprimé avec succès.');
    }


}
