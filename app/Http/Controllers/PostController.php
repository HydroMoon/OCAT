<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Post;
use Image;
use Storage;
use Purifier;
use Alert;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::orderBy('id', 'desc')->paginate(10);
      return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
          'body' => 'required',
          'front_image' => 'sometimes|image'
        ));
        //save info into database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = Purifier::clean($request->body);
        $post->uname = $request->uname;

        if ($request->hasFile('front_image')) {
          $image = $request->file('front_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(750, 300)->save($location);

          $post->image = $filename;
        }

        $post->save();

      Alert::success(__('words.success'), __('trans.post_add'));

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Validate the data
      $post = Post::find($id);

      if ($request->slug == $post->slug) {
          $this->validate($request, array(
              'title' => 'required|max:255',
              'body'  => 'required',
              'front_image' => 'sometimes|image'
          ));
      } else {
      $this->validate($request, array(
              'title' => 'required|max:255',
              'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
              'body'  => 'required',
              'front_image' => 'sometimes|image'
          ));
      }

      // Save the data to the database
      $post = Post::find($id);

      $post->title = $request->title;
      $post->slug = $request->slug;
      $post->body = Purifier::clean($request->body);

      if ($request->hasFile('front_image')) {
        $image = $request->file('front_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(750, 300)->save($location);

        $oldfilename = $post->image;

        $post->image = $filename;

        Storage::delete($oldfilename);

      }

      $post->save();

      // set flash data with success message
      Alert::success(__('words.success'), __('trans.post_edit'));

      // redirect with flash data to posts.show
      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);

      Storage::delete($post->image);

      $post->delete();

      Alert::success(__('words.success'), __('trans.post_delete'));

      return redirect()->route('posts.index');
    }

    public function mediaPanel()
    {

      $album = Album::all();

      return view('posts.media')->with(['album' => $album]);
    }

    public function addAlbum(Request $request)
    {
        $this->validate($request, array(
            'album' => 'required',
        ));

        $album = new Album;

        $album->album = $request->album;

        $album->save();

        Alert::success(__('words.success'), 'تمت إضافة الالبوم بنجاح');

        return redirect()->back();
    }

    public function storeMedia(Request $request)
    {
        
        $this->validate($request, array(
            'img' => 'required|image'
        ));

        $images = new Photo;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('gallery/' . $filename);
            Image::make($image)->fit(1280, 720)->save($location);
            $images->image = $filename;
            $images->album = $request->album;
            $images->caption = $request->caption;
          }

        $images->save();

      Alert::success(__('words.success'),'تمت إضافة الصور بنجاح');


        return redirect()->back();
    }
}