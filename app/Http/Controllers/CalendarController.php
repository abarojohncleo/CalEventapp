<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarModel;

class CalendarController extends Controller
{
    public function store(Request $request)
    {
        $calendar = new CalendarModel([
            'event' =>  $request->input('event'),
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'days' => json_encode($request->input('days')),
        ]);
        $calendar->save();

        return response()->json($calendar);
    }
    public function index()
    {
        return response()->json(CalendarModel::orderBy('created_at', 'desc')->get());
    }
}
