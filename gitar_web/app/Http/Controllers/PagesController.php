<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Sample;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }

    public function test()
    {
        return getapi();
    }

    public function about()
    {
        $judul = "App Gitar Jreng";
        return view('about', ['judul' => $judul]);
    }

    public function stem()
    {
        return view('stem');
    }

    public function upload_stem()
    {
        return view('upload_stem');
    }

    public function insert_stem(Request $request)
    {
        //validate post data
        $this->validate($request, [
            'label' => 'required',
            'variasi' => 'required',
        ]);
        //get post data
        $postData = $request->all();
        $postData['file'] = 'none';
        $postData['user_id'] = Auth::user()->id;
    
        if ($request->file != null) {
            // $this->validate($request, [
            //     'file' => 'required|file|mimes:audio/wav'
            // ]);
            $image = $request->file('file');
            $namaewa = $request->input('label') ."_".$request->input('variasi')."_by_". Auth::user()->id;
            // $imageName=str_replace("_", " ", $namaewa).'_'.time().'.'.$image->getClientOriginalExtension();
            $imageName=$namaewa.'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/file_upload/file_tune/');
            $image->move($destinationPath, $imageName);
    
            $postData['file'] = $imageName;

        }
        // dd($postData);

        //insert post data
        Sample::create($postData);
    
        //store status message
        Session::flash('success_msg', 'Terima kasih telah berpartisipasi');
        // dd($namaewa .'.'. $image->getClientOriginalExtension());
        // system('edge-impulse-uploader --label '. $request->input('label') . ' ' . 'D:\\Data_Kampus\\Gitar28August_2-Copy\\public\\file_upload\\file_tune\\' . $namaewa .'.'. $image->getClientOriginalExtension());
        
        return redirect()->route('stem/add');
    }
}