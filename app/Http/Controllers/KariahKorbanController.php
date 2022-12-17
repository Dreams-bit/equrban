<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\KariahKorban;
use App\Models\KariahKorbanTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KariahKorbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function kariah_daftar_korban($id)
    {
        $kariah = DB::select('select * from kariahs where id = ?', [$id]);

        $kariah_korban = DB::table('kariah_booking_korban_table')
            ->where("kariah_id", "=", $id)
            ->get();

        $jumlah_pesanan_korban = DB::table('kariah_booking_korban_table')
            ->where("kariah_id", "=", $id)
            ->count();

        $jumlah_pesanan_harga_korban = DB::table('kariah_booking_korban_table')
            ->where("kariah_id", "=", $id)
            ->sum('harga_korban');

        return view('kariah_maklumat_asas', compact('kariah', 'kariah_korban', 'jumlah_pesanan_harga_korban', 'jumlah_pesanan_korban'));
    }

    public function store(Request $request)
    {
        $kariah = DB::select('select * from kariahs where id = ?', [$request->input('kariah_id')]);

        $harga_korban = 0;
        if($request->input('inputPakej_korban') == '1 Bahagian'){
            $harga_korban = 750;
        }else{
            $harga_korban = 5250;
        }

        $reg = KariahKorbanTable::create([
            'peserta_name' => $request->input('inputNama_peserta'),
            'pakej_korban' => $request->input('inputPakej_korban'),
            'harga_korban' => $harga_korban,
            'kariah_id' => $request->input('kariah_id'),
        ]);

        //table hold data payment

        if($reg && $kariah){
            return redirect()->back();
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }

    public function kariah_daftar_korban_delete($id)
    {
        DB::delete('delete from kariah_booking_korban_table where id = ?', [$id]);

        return redirect()->back();
    }

    public function kariah_booking_details($id)
    {
        $data = $id;

        $kariah_booking_details = DB::table('kariah_booking_korban_table')
            ->join('kariahs', 'kariahs.id', "=", 'kariah_booking_korban_table.kariah_id')
            ->where("kariahs.id", "=", $data)
            ->get();

        $kariah_korban = DB::table('kariah_booking_korban_table')
            ->where("kariah_id", "=", $id)
            ->get();

        $jumlah_pesanan_harga_korban = DB::table('kariah_booking_korban_table')
            ->where("kariah_id", "=", $id)
            ->sum('harga_korban');


        return view('kariah_booking_details', compact('kariah_booking_details', 'kariah_korban', 'jumlah_pesanan_harga_korban'));
    }

    public function kariah_daftar_akad($id)
    {
        $data = $id;

        $kariah_booking_details = DB::table('kariah_booking_korban_table')
            ->join('kariahs', 'kariahs.id', "=", 'kariah_booking_korban_table.kariah_id')
            ->where("kariahs.id", "=", $data)
            ->get();

        return view('kariah_daftar_akad', compact('kariah_booking_details'));
    }

    public function kariah_daftar_payment($id)
    {
        $data = $id;

        $kariah_booking_details = DB::table('kariah_booking_korban_table')
            ->join('kariahs', 'kariahs.id', "=", 'kariah_booking_korban_table.kariah_id')
            ->where("kariahs.id", "=", $data)
            ->get();

        $jumlah_pesanan_harga_korban = DB::table('kariah_booking_korban_table')
            ->where("kariah_id", "=", $id)
            ->sum('harga_korban');


        return view('kariah_daftar_payment', compact('kariah_booking_details', 'jumlah_pesanan_harga_korban'));
    }

    public function kariah_daftar_payment_bank($id)
    {
        $data = $id;

        $kariah_name = DB::table('kariahs')
            ->where("kariahs.id", "=", $data)
            ->get('name');

        $kariah_name_first_three = substr($kariah_name, 10, -22);

        $kariah_IC = DB::table('kariahs')
            ->where("kariahs.id", "=", $data)
            ->get('ic_number');

        $kariah_IC_last_four = substr($kariah_IC, -7, 4);

        $kariah_booking_details = DB::table('kariah_booking_korban_table')
            ->join('kariahs', 'kariahs.id', "=", 'kariah_booking_korban_table.kariah_id')
            ->where("kariahs.id", "=", $data)
            ->get();

        $jumlah_pesanan_harga_korban = DB::table('kariah_booking_korban_table')
            ->where("kariah_id", "=", $id)
            ->sum('harga_korban');


        return view('kariah_daftar_payment_bank', compact('kariah_booking_details', 'jumlah_pesanan_harga_korban', 'kariah_IC', 'kariah_IC_last_four', 'kariah_name', 'kariah_name_first_three'));
    }

    public function fileUpload(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:txt,xlx,xls,pdf|max:2048'
            ]);


            $fileModel = new KariahKorban();

            if($req->file()) {
                //loop sini
                $insert_data = KariahKorbanTable::all();

                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                // $fileModel->receipt_name = time().'_'.$req->file->getClientOriginalName();
                // $fileModel->file_path = 'storage' . $filePath;
                // $fileModel->kariah_id = $req->input('id');
                // $fileModel->save();

                foreach ($insert_data as $insert_datas) {
                    KariahKorban::create([
                        'peserta_name' => $insert_datas->peserta_name,
                        'pakej_korban' => $insert_datas->pakej_korban,
                        'harga_korban' => $insert_datas->harga_korban,
                        'status_pembayaran' => 'pending',
                        'receipt_name' => time().'_'.$req->file->getClientOriginalName(),
                        'file_path' => 'storage' . $filePath,
                        'hari_korban' => 'Belum Ditetapkan',
                        'waktu_sembelihan' => 'Belum Ditetapkan',
                        'kariah_id' => $req->input('id'),
                    ]);
                }

                DB::table('kariah_booking_korban_table')->delete();

                return redirect('kariah_dashboard')
                ->with('success','File has been uploaded. It may take a few moments to review your payment.')
                ->with('file', $fileName);
            }
                //table real data payment
        // $reg = KariahKorban::create([
        //     'peserta_name' => $request->input('inputNama_peserta'),
        //     'pakej_korban' => $request->input('inputPakej_korban'),
        //     'harga_korban' => $harga_korban,
        //     'status_pembayaran' => 'pending',
        //     'file_id' => $request->input('kariah_id'),
        //     'kariah_id' => $request->input('kariah_id'),
        // ]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
