<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function get_list_sample()
    {
        

    $curl = curl_init();
  
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://studio.edgeimpulse.com/v1/api/45660/raw-data/label-object-detection-queue",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => [
        "Accept: application/json",
      "x-api-key: ei_e0050bfeee3ce81e23ec498be73a5caf7ac8aa388c1ddc1fbed936f3a7a15ffd"
  
      ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
    //   dd($response);
     $mat =  preg_replace('/[^0-9]/', '', $response);
     
  
      $data_array = [];
      $aaa = '';
    for ($i=0; $i < 1; $i++) { 
     array_push($data_array,str_split($mat,8));
     return response()->json([
       'status' => 'success',
       'data' => [
         'id' => $data_array
       ]
       ]);
    $aaa[$i] += $data_array[$i];
  
    }


    }
 
    }
}
