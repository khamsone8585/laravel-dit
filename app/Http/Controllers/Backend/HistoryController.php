<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Http\Requests\HistoryPost;
use DB;
use File;
use Auth;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::all();
        return view('admin.history.index',compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HistoryPost $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'description' => 'required',
        // ]);
        // $path = $request->file('image')->store('public/images');
        // $post = new Post;
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->image = $path;
        // $post->save();

        // return redirect()->route('posts.index')
        //                 ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = History::find($id);
        return view('admin.history.edit',compact('history'));
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
        $request->validate([
            'content' => 'required',
            'image' => 'required',
        ]);
        $old_image = $request->old_image;

        $image = $request->file('image');

        if($image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen. '.' .$img_ext;
            $up_location = 'image/history/';
            $last_img = $up_location.$img_name;
            $image->move($up_location,$img_name);

            File::delete($old_image);
            History::find($id)->update([
                'content' => $request->content,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
            return Redirect()->route('history.index')->with('success','ອັບເດດຂໍ້ມູນປະຫວັດຄວາມເປັນມາສຳເລັດ!!');
        }else{
            History::find($id)->update([
                'content' => $request->content,
                'created_at' => Carbon::now()
            ]);
            return Redirect()->route('history.index')->with('success','ອັບເດດຂໍ້ມູນປະຫວັດຄວາມເປັນມາສຳເລັດ!!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
