<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StructurePost;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use File;
use Image;
use Illuminate\Support\Facades\Storage;
class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $str = Structure::all();
        return view('admin.structure.index',compact('str'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StructurePost $request)
    {
        $strPost = Structure::find($id);
        $validatedData = $request->validated();
        $validatedData['user_id'] = $request->user()->id;

        if($request->hasfile('profile_image'))
        {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/structures/', $filename);
            $strPost->file = $filename;
        }
        $strPost->save();
        return redirect()->back()->with('status','strPost Image Added Successfully');



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
        $str = Structure::find($id);
        return view('admin.structure.edit',compact('str'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StructurePost $request, $id)
    {
        $strPost = Structure::find($id);
        $validatedData = $request->validated();
        $validatedData['user_id'] = $request->user()->id;

        $strPost->title = $request->input('title');

        if($request->hasfile('file'))
        {
            
            $destination = 'structures/'.$strPost->file;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/structures/', $filename);
            $strPost->file = $filename;
        }

        $strPost->update();
        return redirect()->route('structure.index')->with('status','strPost Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $strPost = Structure::find($id);
        $destination = 'image/structures/'.$strPost->file;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $strPost->delete();
        return redirect()->back()->with('status','strPost Image Deleted Successfully');
    }
}
