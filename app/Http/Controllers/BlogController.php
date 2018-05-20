<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $blogs = blog::orderby('id', 'DESC')->take(4)->get();
        $page = blog::paginate(4); //分页
        return view('blog.index',['blogs' => $blogs,'page' =>$page,'blogs1'=>$blogs ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'pic' => 'required',
        ]);
        if ($request->file('pic') != null) { //file('pic')取的是前台input id的名字,注意
            $path = $request->file('pic')->store('public');
            $postCreate = new blog;
            $postCreate->title = $request->title;
            $postCreate->body = $request->body;
            $postCreate->pic = $path;
            $postCreate->save();
        }
        else
        {
            dd($request->file('pic'));
        }
        return $this->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
        $postShow=blog::find($blog->id);
        return view('blog.show',compact('postShow'));
    }

    /**
     * Display the find resource.
     *
     * @param  \App\blog $blog
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $blogs = blog::where('title', 'like', '%' . $request->search . '%')->orwhere('body')->get();
        $page = 'a';
        return view('blog.index', compact('blogs', 'page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //

        $blogs=blog::find($blog->id);

        return view('blog.update',compact('blogs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'pic' => 'required',
        ]);
        Storage::delete($blog->pic); //删除文件
        $path = $request->file('pic')->store('public');
        $postUpdate=blog::find($blog->id);
        $postUpdate->title = $request->title;
        $postUpdate->body = $request->body;
        $postUpdate->pic = $path;
        $postUpdate->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
        $flight=blog::find($blog->id);
        $flight->delete(); //删除数据
        Storage::delete($blog->pic); //删除文件
        return $this->index();
    }
}
