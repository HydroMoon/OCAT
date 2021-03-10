<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Contactus;
use App\Models\Event;


class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(2)->get();

        $event = json_encode(Event::all('title', 'start', 'end')->toArray(), JSON_UNESCAPED_UNICODE);

        return view('welcome')->with(['posts' => $posts, 'events' => $event]);
    }

    public function news()
    {
        $posts = Post::orderBy('id', 'desc')->take(2)->get();

        return view('news')->with(['posts' => $posts]);
    }

    public function getSingle($slug)
    {
      $post = Post::where('slug', '=', $slug)->first();

      

      return view('blog.single')->with(['post' => $post]);
    }

    public function saveMessage(Request $request)
    {
      
      //Validate
      $this->validate($request, array(
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
      ));

      $mess = new Contactus;

      $mess->name = $request->name;
      $mess->email = $request->email;
      $mess->message = $request->message;

      $mess->save();

      Session::flash('success', __('trans.message'));

      return redirect()->route('contact');
    }

}
