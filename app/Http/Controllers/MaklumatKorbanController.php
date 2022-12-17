<?php

namespace App\Http\Controllers;

use App\Models\MaklumatKorban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaklumatKorbanController extends Controller
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
    public function store_kuantiti_lembu(Request $request)
    {
        $kuantiti_lembu = $request->input('kuantiti_lembu');

        $req = DB::update('update maklumat_korban set kuantiti_lembu = ? where id = ?', [$kuantiti_lembu, 1]);


        if($req){
            return back()->with('success', 'Bilangan Lembu Korban Sudah Dikemaskini.');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }

    public function store_bahagian_lembu(Request $request)
    {
        $bahagian_lembu = $request->input('bahagian_lembu');

        $req = DB::update('update maklumat_korban set harga_qurban_bahagian = ? where id = ?', [$bahagian_lembu, 1]);


        if($req){
            return back()->with('success', 'Harga Lembu Korban Sudah Dikemaskini.');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }

    public function store_seekor_lembu(Request $request)
    {
        $seekor_lembu = $request->input('seekor_lembu');

        $req = DB::update('update maklumat_korban set harga_qurban_seekor = ? where id = ?', [$seekor_lembu, 1]);


        if($req){
            return back()->with('success', 'Harga Lembu Korban Sudah Dikemaskini.');
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
    public function show()
    {
        $maklumat_korban = DB::select('select * from maklumat_korban where id = 1');

        return view("admin_maklumat_korban", compact('maklumat_korban'));
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
