<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jenis;
use App\Merk;
use Illuminate\Http\Request;
use Session;

class MerjenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk = Merk::all();
        $jenis = Jenis::all();

        //  dd($user);
        return view('admin.merjen', ['merk' => $merk, 'jenis' => $jenis]);
    }

    // merk
    public function addm()
    {
        //load form view
        return view('admin.form_merjen');
    }

    public function insertm(Request $request)
    {
        //validate post data
        $this->validate($request, [
            'nama_merk' => 'required|unique:merks',
        ]);
        //get post data
        $postData = $request->all();
        //insert post data
        Merk::create($postData);
        //store status message
        Session::flash('success_msg', 'Merk added successfully!');
        return redirect()->route('merjen');
    }

    public function editm($id)
    {
        //get post data by id
        $post = Merk::find($id);

        //load form view
        return view('admin.form_merjen', ['merk' => $post]);
    }

    public function updatem($id, Request $request)
    {
        //validate post data
        $this->validate($request, [
            'nama_merk' => 'required|unique:merks',
        ]);
        //get post data
        $postData = $request->all();
        // //update post data
        Merk::find($id)->update($postData);
        // //store status message
        Session::flash('success_msg', 'Merk updated successfully!');
        return redirect()->route('merjen');
    }

    public function deletem($id)
    {
        //update post data
        Merk::find($id)->delete();
        //store status message
        Session::flash('success_msg', 'Merk deleted successfully!');
        return redirect()->route('merjen');
    }
    // merk
    public function addj()
    {
        //load form view
        return view('admin.form_merjen');
    }

    public function insertj(Request $request)
    {
        //validate post data
        $this->validate($request, [
            'nama_jenis' => 'required|unique:jeniss',
        ]);
        //get post data
        $postData = $request->all();
        //insert post data
        Jenis::create($postData);
        //store status message
        Session::flash('success_msg', 'Jenis added successfully!');
        return redirect()->route('merjen');
    }

    public function editj($id)
    {
        //get post data by id
        $post = Jenis::find($id);

        //load form view
        return view('admin.form_merjen', ['jenis' => $post]);
    }

    public function updateJ($id, Request $request)
    {
        //validate post data
        $this->validate($request, [
            'nama_jenis' => 'required|unique:jeniss',
        ]);
        //get post data
        $postData = $request->all();
        // //update post data
        Jenis::find($id)->update($postData);
        // //store status message
        Session::flash('success_msg', 'Jenis updated successfully!');
        return redirect()->route('merjen');
    }

    public function deletej($id)
    {
        //update post data
        Jenis::find($id)->delete();
        //store status message
        Session::flash('success_msg', 'Jenis deleted successfully!');
        return redirect()->route('merjen');
    }
}
