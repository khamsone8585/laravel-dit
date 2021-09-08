<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CategoryNew;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        $cates = CategoryNew::get();
        return view('admin.news.index',compact('news','cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = CategoryNew::get();
        return view('admin.news.create',compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'content'=>'required',
            'cates_id'=>'required',
            'picture'=>'required|mimes:png,jpg,jpeg|max:2048'
        ],[
            'title.required'=>'ໃສ່ຫົວເລື່ອງຂ່າວກ່ອນ!',
            'cates_id.required'=>'ເລືອກປະເພດຂ່າວກ່ອນ!',
            'content.required'=>'ກະລຸນາໃສ່ເນື້ອໃນກ່ອນ!',
            'picture.required'=>'ເລືອກຟາຍຮູບພາບກ່ອນ',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->cates_id = $request->cates_id;
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/news/', $filename);
            $news->picture = $filename;
        }

        $news->save();
        return redirect()->route('news.index')->with('success','News created successfully!');
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
        //
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
