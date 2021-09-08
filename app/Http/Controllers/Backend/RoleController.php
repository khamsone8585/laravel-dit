<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
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
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file_content' => 'required',
        ]);
        $roles = new Role();
        $post->title = $request->title;
        if($request->hasfile('file_content'))
        {
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/roles/', $filename);
            $roles->file = $filename;
        }

        $roles->save();
        return redirect()->route('admin.role.index')->with('success','Post created successfully!');
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
        $roles = Role::find($id);
        return view('admin.role.edit',compact('roles'));
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
        $roles = Role::find($id);
        $validatedData = $request->validated();
        $validatedData['user_id'] = $request->user()->id;

        $roles->title = $request->input('title');

        if($request->hasfile('file'))
        {

            $destination = 'roles/'.$strPost->file;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/roles/', $filename);
            $roles->file = $filename;
        }

        $roles->update();
        return redirect()->route('role.index')->with('status','roles Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Role::find($id);
        $destination = 'image/roles/'.$strPost->file;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $roles->delete();
        return redirect()->back()->with('status','roles Deleted Successfully');
    }
}
