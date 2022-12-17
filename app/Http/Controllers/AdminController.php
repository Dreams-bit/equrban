<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\File;
use App\Models\Kariah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
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
    public function store(Request $request)
    {
        //
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

    public function adminDashboard()
    {
        $adminID = array();
        if(session('loginId')){
            $adminID = Admin::where('id','=', session()->get('loginId'))->first();
        }

        $kariahAkaun = DB::table('kariahs')
            ->get();

        $manage_pengedar = DB::table('kariahs')
            ->join('kariah_pengedar_qurban', 'kariah_pengedar_qurban.kariah_id', '=', 'kariahs.id')
            ->get();


        //$maklumat_korban = DB::select('select * from maklumat_korban where id = ?', [1]);seleDB::all
        $maklumat_korban = DB::table('maklumat_korban')
            ->where('id', '=', 1)
            ->get();

        $jumlah_jadual = DB::table('kariahs')
            ->join('kariah_booking_korban', 'kariahs.id', "=", 'kariah_booking_korban.kariah_id')
            ->where([
                ['status_pembayaran','=', 'paid'],
                ['hari_korban','=', 'Belum Ditetapkan'],
                ['waktu_sembelihan','=', 'Belum Ditetapkan']
            ])
            ->count();

        $jumlah_tempahan = DB::table('kariah_booking_korban')
            ->count();

        return view('admin_dashboard', compact('adminID', 'kariahAkaun', 'manage_pengedar', 'maklumat_korban','jumlah_jadual','jumlah_tempahan'));
    }

    public function addKariah(Request $request)
    {
        $reg = Kariah::create([
            'ic_number' => $request->input('inputIC_number'),
            'name' => $request->input('inputName'),
            'phone' => $request->input('inputPhone'),
            'address1' => $request->input('inputAddress1'),
            'address2' => $request->input('inputAddress2'),
            'city' => $request->input('inputCity'),
            'state' => $request->input('inputState'),
            'email' => $request->input('inputEmail'),
            'password' => Hash::make($request->input('inputPassword')),
        ]);
        if($reg){
            return back();
        }else{
            return back()->with('fail', 'Something wrong');
        }

    }

    public function manageKariah()
    {

        $kariah = DB::table('kariahs')
            ->get();

        $jumlah_kariah_berdaftar = DB::table('kariahs')
            ->count();

        $jumlah_kariah_perempuan = DB::table('kariahs')
            ->where('name', 'like', '%' . 'binti' . '%')
            ->count();

        $jumlah_kariah_lelaki= DB::table('kariahs')
            ->where('name', 'like', '%' . 'bin' . '%')
            ->count();

        return view('manage_kariah', compact('kariah', 'jumlah_kariah_berdaftar','jumlah_kariah_lelaki', 'jumlah_kariah_perempuan'));
    }

    public function manageKariah_edit($id)
    {
        //$manageKariahEdit = DB::select('select * from kariahs where id = ?', [$id]);
        $manageKariahEdit = DB::table('kariahs')
            ->where('id', '=', [$id])
            ->get();

        $manageKariahPengedar = DB::table('kariahs')
            ->join('kariah_pengedar_qurban', 'kariahs.id', "=", 'kariah_pengedar_qurban.kariah_id')
            ->where("kariahs.id", "=", [$id])
            ->get();

        return view('manage_kariah_edit', compact('manageKariahEdit', 'manageKariahPengedar'));
    }

    public function manageKariah_delete($id)
    {
        // DB::delete('delete from kariahs where id = ?', [$id]);
        DB::table('kariahs')
            ->where('id', '=', [$id])
            ->delete();
        return redirect('manage_kariah')->with('fail', 'Data Kariah Telah Dihapus.');
    }

    public function manageKariah_update(Request $request, $id)
    {
        $kariah_name = $request->input('name');
        $kariah_ic_number = $request->input('ic_number');
        $kariah_phone = $request->input('phone');
        $kariah_email = $request->input('email');
        $kariah_address1 = $request->input('address1');
        $kariah_address2 = $request->input('address2');
        $kariah_city = $request->input('city');
        $kariah_state = $request->input('state');

        DB::update('update kariahs set name = ?, ic_number = ?, phone = ?, email = ?, address1 = ?, address2 = ?, city = ?, state = ? where id = ?'
        , [$kariah_name, $kariah_ic_number, $kariah_phone, $kariah_email, $kariah_address1, $kariah_address2, $kariah_city, $kariah_state, $id]);

        return redirect('manage_kariah')->with('success', 'Data Dikemaskini.');
    }

    public function adminNew(Request $request)
    {
        $reg = Admin::create([
            'nama_jawatan' => $request->input('inputnama_jawatan'),
            'password' => Hash::make($request->input('inputPassword')),
        ]);
        if($reg){
            return redirect('admin_login')->with('success', 'New Admin has been Created Successfully.');
        }else{
            return back()->with('fail', 'Something wrong');
        }

    }
    public function adminLogin(Request $request)
    {
        $admin = Admin::where('nama_jawatan','=',$request->inputnama_jawatan)->first();
        if($admin){
            if($request->inputPassword == $admin->password){
                $request->session()->put('loginId', $admin->id);
                return redirect('admin_dashboard');
            }else{
                return back()->with('fail', 'Password not matches.');
            }
        }else{
            return back()->with('fail', 'This Jawatan is not registered');
        }
    }

    public function adminLogout()
    {
        if(session('loginId')){
            session()->pull('loginId');
            return redirect('admin_login');
        }
    }

    public function manage_tempahan_korban()
    {

        $manage_tempahan_korban = DB::table('kariahs')
            ->join('kariah_booking_korban', 'kariahs.id', "=", 'kariah_booking_korban.kariah_id')
            ->get();
        // $receipt_id = DB::table('kariahs')
        //     ->join('files', 'files.kariah_id', "=", 'kariahs.id')
        //     ->get('receipt_name', '=', 'kariah_id');

        $jumlah_tempahan_korban = DB::table('kariah_booking_korban')
            ->count();

        $jumlah_tempahan_korban_paid = DB::table('kariah_booking_korban')
            ->where('status_pembayaran', '=', 'paid')
            ->count();

        $jumlah_tempahan_korban_pending = DB::table('kariah_booking_korban')
            ->where('status_pembayaran', '=', 'pending')
            ->count();

        return view('admin_tempahan_korban', compact('manage_tempahan_korban', 'jumlah_tempahan_korban', 'jumlah_tempahan_korban_paid', 'jumlah_tempahan_korban_pending'));
    }

    public function manage_tempahan_korban_jadual(){

        $jadual_tempahan_korban = DB::table('kariahs')
            ->join('kariah_booking_korban', 'kariahs.id', "=", 'kariah_booking_korban.kariah_id')
            ->where('status_pembayaran', '=', 'paid')
            ->get();

        $jumlah_tempahan_korban_jadual = DB::table('kariahs')
            ->join('kariah_booking_korban', 'kariahs.id', "=", 'kariah_booking_korban.kariah_id')
            ->where([
                ['status_pembayaran','=', 'paid'],
                ['hari_korban','=', 'Belum Ditetapkan'],
                ['waktu_sembelihan','=', 'Belum Ditetapkan']
            ])
            ->count();

        return view('admin_tempahan_korban_jadual', compact('jadual_tempahan_korban', 'jumlah_tempahan_korban_jadual'));
    }

    public function manage_pengedar(){
        $manage_pengedar = DB::table('kariahs')
            ->join('kariah_pengedar_qurban', 'kariah_pengedar_qurban.kariah_id', '=', 'kariahs.id')
            ->get();

        $jumlah_lembu_pengedar = DB::table('kariah_pengedar_qurban')
            ->sum('available_unit');

        $jumlah_pengedar = DB::table('kariah_pengedar_qurban')
            ->count();

        $harga_tertinggi = DB::table('kariah_pengedar_qurban')
            ->max('harga_pengedar');

        $harga_terendah = DB::table('kariah_pengedar_qurban')
            ->min('harga_pengedar');

        return view('manage_pengedar', compact('manage_pengedar', 'jumlah_lembu_pengedar', 'jumlah_pengedar', 'harga_tertinggi', 'harga_terendah'));
    }

    public function store_status_pembayaran(Request $request, $id)
    {
        $status_pembayaran = $request->input('status_pembayaran');

        $req = DB::table('kariah_booking_korban')
                    ->where('id', '=', [$id])
                    ->update(['status_pembayaran' => $status_pembayaran]);

        return back()->with('success', 'Status Pembayaran Sudah Dikemaskini.');

    }

    public function store_waktu_sembelihan(Request $request, $id)
    {
        $hari_sembelihan = $request->input('hari_sembelihan');
        $waktu_sembelihan = $request->input('waktu_sembelihan');

        $req = DB::table('kariah_booking_korban')
                    ->where('id', '=', [$id])
                    ->update([
                        'hari_korban' => $hari_sembelihan,
                        'waktu_sembelihan' => $waktu_sembelihan,
                    ]);

        return back()->with('success', 'Jadual Sembelihan Sudah Dikemaskini.');

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
