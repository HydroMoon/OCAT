<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Contactus as Message;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard');
    }



    public function addEvent(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'start' => 'required|date',
          ));

          $event = new Event;

          $event->title = $request->title;
          $event->start = $request->start;
          $event->end = $request->end;

          $event->save();

          Session::flash('success', __('trans.post_add'));

        return redirect()->route('calender');
    }

    public function delEvent(Request $request)
    {
        $event = Event::find($request->id);

        $event->delete();

        return redirect()->route('calender');
    }

    public function getMessage()
    {
        $mess = new Message;
        $mess = Message::all();

        return view('messages')->with(['mess' => $mess]);
    }
}
