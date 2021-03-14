<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Photo;
use App\Models\Contactus as Message;
use Alert;
use Storage;

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

      Alert::success(__('words.success'), 'تمت إضافة الحدث بنجاح');

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

    public function images()
    {
        $image = Photo::all();

        return view('images')->with(['imgs' => $image]);
    }

    public function destroy(Request $request)
    {
        $image = Photo::find($request->id);

        Storage::delete($image->image);

        $image->delete();

        Alert::success(__('words.success'), __('trans.img_cover_delete'));

        return redirect()->back();
    }

    
}
