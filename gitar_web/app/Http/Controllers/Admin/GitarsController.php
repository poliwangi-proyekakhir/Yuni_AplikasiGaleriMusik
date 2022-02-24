<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Gitar;
use App\Jenis;
use App\Merk;
use Session;

class GitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gitar = Gitar::all();

        //  dd($user);
        return view('admin.gitar', ['gitar' => $gitar]);
    }

   
    public function add()
    {

        $merk = Merk::all();
        $jenis = Jenis::all();

        //load form view
        return view('admin.add_gitar', ['jenis' => $jenis, 'merk' => $merk]);
    }

    public function insert(Request $request)
    {

        //validate post data
        $this->validate($request, [
            'nama' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            // 'link' => 'required',
        ]);

        //get post data
        $postData = $request->all();
        $postData['gambar'] = 'none';

        if ($request->gambar != null) {
            $this->validate($request, [
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $image = $request->file('gambar');
            $imageName=str_replace("_", " ",$request->input('nama')).'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/file_upload/img/');
            $image->move($destinationPath, $imageName);

            $postData['gambar'] = $imageName;
        }
        //insert post data
        Gitar::create($postData);

        //store status message
        Session::flash('success_msg', 'Gitar added successfully!');

        return redirect()->route('gitars');
    }

    public function edit($id)
    {

        $merk = Merk::all();
        $jenis = Jenis::all();

        //get post data by id
        $post = Gitar::find($id);

        //load form view
        return view('admin.add_gitar', ['post' => $post, 'jenis' => $jenis, 'merk' => $merk]);
    }

    public function update($id, Request $request)
    {
        //validate post data
        $this->validate($request, [
            'nama' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            // 'link' => 'required',

        ]);

        //get post data
        $postData = $request->all();
        $comm = Gitar::find($id);
        $postData['gambar'] = $comm->gambar;

        if ($request->gambar != null) {
            $this->validate($request, [
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $image = $request->file('gambar');
            $imageName=str_replace("_", " ",$request->input('nama')).'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/file_upload/img/');
            $image->move($destinationPath, $imageName);

            $postData['gambar'] = $imageName;
        }
            // dd($postData);

        // //update post data
        Gitar::find($id)->update($postData);
        // //store status message
        Session::flash('success_msg', 'Gitar updated successfully!');

        return redirect()->route('gitars');
    }

    public function delete($id)
    {
        //update post data
        Gitar::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'Gitar deleted successfully!');

        return redirect()->route('gitars');
    }
}
