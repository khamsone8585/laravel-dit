<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CategoryNew;
use Illuminate\Http\Request;

class CateNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = CategoryNew::all();
        return view('admin.categoryNews.index', compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoryNews.create');
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
            'name'=>'required'
        ],[
            'name.require'=>'ກະລຸນາໃສ່ຊື່ປະເພດຂ່າວກ່ອນ!'
        ]);
        CategoryNew::create($request->all());
        return redirect()->route('cateNews.index')->with('success','ເພີ່ມຂໍ້ມູນສຳເລັດແລ້ວ!');
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
        $cates = CategoryNew::find($id);
        return view('cateNews.edit',compact('cates'));
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
        $cates = CategoryNew::find($id);
        $request->validate([
            'name'=>'required'
        ],[
            'name.require'=>'ກະລຸນາໃສ່ຊື່ປະເພດຂ່າວກ່ອນ!'
        ]);
        $cates->update($request->all());
        return redirect()->route('cateNews.index')->with('success','ແກ້ໄຂຂໍ້ມູນສຳເລັດແລ້ວ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cates = CategoryNew::find($id);
        $cates->delete();
        return redirect()->back()->with('status','CatesNews Deleted Successfully');
    }
}
