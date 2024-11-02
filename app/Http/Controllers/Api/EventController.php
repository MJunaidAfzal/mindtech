<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Resources\EventResource;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get(['title', 'start','end']);
        return response()->json($events);

        // if($events->count() > 0){
        //     return EventResource::collection($events);
        // }
        // else{
        //     return response()->json(['message' => 'No Events found'], 404);
        // }

    }
}
