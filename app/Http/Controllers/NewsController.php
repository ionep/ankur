<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\News;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= News::orderBy('created_at','desc')->paginate(10);
        return view('pages.news.index')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:4999'
        ]);
        // Handle file upload
        if($request->hasFile('cover_image'))
        {
            // get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // get jst filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension= $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path= $request->file('cover_image')->move(public_path('news'),$filenameToStore);
        }
        else{
            $filenameToStore='noimage.jpg';
        }

        $news = new News();
        $news->title = $request->input('title');

        //wrap a long word (tested for longest english word which is 45 char long)
        $news->body = wordwrap($request->input('body'),50,' ',true);

        $news->cover_image=$filenameToStore;
        $news->save();

        return redirect('/extras/news')->with('success', 'News Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news= News::find($id);
        if(count($news)>0)
        {
            return view('pages.news.view')->with('news',$news);
        }
        else
        {
            return redirect('/extras/news')->with('error',"News not found");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news= News::find($id);
        return view('pages.news.edit')->with('news',$news);
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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:4999'
        ]);
        // Handle file upload
        if($request->hasFile('cover_image'))
        {
            // get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // get jst filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension= $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            $path= $request->file('cover_image')->move(public_path('news'),$filenameToStore);
        }
        else{
            $filenameToStore='noimage.jpg';
        }

        $news =News::find($id);
        $news->title = $request->input('title');

        //wrap a long word (tested for longest english word which is 45 char long)
        $news->body = wordwrap($request->input('body'),50,' ',true);

        $news->cover_image=$filenameToStore;
        $news->save();

        return redirect('/extras/news')->with('success', 'News Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news =News::find($id);
        if(count($news)>0)
        {
            if($news->cover_image !="noimage.jpg"){
                unlink(public_path().'\news\\'.$news->cover_image);
            }
            $news=News::find($id)->delete();
            return redirect('/extras/news')->with('error','News Deleted');
        }
        else{
            return redirect('/extras/news')->with('error','News not found');
        }
    }
}
