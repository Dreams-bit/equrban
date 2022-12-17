<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\KariahKorban;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function fileView($id){
        $data= DB::table('kariah_booking_korban')->where('id', $id)->first();
        //dd($data);
        $filepath = public_path("storage/uploads/{$data->receipt_name}");
        return response()->file($filepath);
    }


}
