<?php

namespace App\Http\Controllers;

use App\Models\Kariah;
use App\Models\KariahPengedar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KariahPengedarController extends Controller
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

    public function kariah_daftar_pengedar($id)
    {
        $kariah = DB::select('select * from kariahs where id = ?', [$id]);

        return view('kariah_daftar_pengedar', compact('kariah'));
    }

    public function kariah_daftar_pengedar_edit($id)
    {
        $kariahPengedarEdit = DB::select('select * from kariah_pengedar_qurban where id = ?', [$id]);
        return view('kariah_daftar_pengedar_edit', ['kariahPengedarEdit' => $kariahPengedarEdit]);
    }

    public function kariah_pengedar_update(Request $request, $id)
    {
        $kariah_pengedar_name = $request->input('name');
        $kariah_pengedar_phone = $request->input('phone');
        $kariah_pengedar_whatsapp_status = $request->input('whatsapp_status');
        $kariah_pengedar_harga_pengedar = $request->input('harga_qurban');
        $kariah_pengedar_available_unit = $request->input('available_unit');

        DB::update('update kariah_pengedar_qurban set name = ?, phone = ?, harga_pengedar = ?, available_unit = ?, whatsapp_status = ? where id = ?'
        , [$kariah_pengedar_name, $kariah_pengedar_phone, $kariah_pengedar_harga_pengedar, $kariah_pengedar_available_unit, $kariah_pengedar_whatsapp_status, $id]);

        return redirect('kariah_dashboard')->with('success', 'Data dikemaskini.');
    }

    public function kariah_pengedar_delete($id)
    {
        DB::delete('delete from kariah_pengedar_qurban where id = ?', [$id]);
        return redirect('kariah_dashboard')->with('fail', 'Data pengedar sudah dihapus.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = KariahPengedar::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'harga_pengedar' => $request->input('harga_qurban'),
            'available_unit' => $request->input('available_unit'),
            'whatsapp_status' => $request->input('whatsapp_status'),
            'kariah_id' => $request->input('kariah_id'),
        ]);
        if($reg){
            return redirect("kariah_dashboard")->with('success', 'Pengedar sudah berjaya didaftar.');
        }else{
            return back()->with('fail', 'Something wrong');
        }
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
