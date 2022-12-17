<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kariah;
use App\Models\KariahKorbanTable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Session;
use Symfony\Component\Console\Input\Input;

class KariahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kariah = Kariah::all();

        dd($kariah);
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
            'inputIC_number' => 'required|min:12|max:12',
            'inputPhone' => 'required|min:10|max:10',
        ]);

        if(Kariah::where('ic_number', '=', $request->input('inputIC_number'))->exists()){
            return back()->with('fail', 'Nombor IC sudah digunapakai.');
        }else{
            return redirect('kariah_register')->with('success', 'Akaun anda telah berjaya didaftar.');
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
        }

    }

    public function checkLogin(Request $request)
    {
        $kariah = Kariah::where('ic_number','=',$request->inputIC_number)->first();
        if($kariah){
            if(Hash::check($request->inputPassword, $kariah->password)){
                $request->session()->put('loginId', $kariah->id);
                return redirect('kariah_dashboard');
            }else{
                return back()->with('fail', 'Identiti Tidak Sepadan.');
            }
        }else{
            return back()->with('fail', 'Identiti Tidak Diketahui');
        }
    }

    public function kariahDashboard()
    {

        $data = array();
        if(session('loginId')){
            $data = Kariah::where('id','=', session()->get('loginId'))->first();
        }

        $kariahKorban = DB::table('kariahs')
            ->join('kariah_booking_korban', 'kariahs.id', "=", 'kariah_booking_korban.kariah_id')
            ->where("kariahs.id", "=", $data->id)
            ->where('status_pembayaran', '=', 'paid')
            ->get();

        $kariahPengedar = DB::table('kariahs')
            ->join('kariah_pengedar_qurban', 'kariahs.id', "=", 'kariah_pengedar_qurban.kariah_id')
            ->where("kariahs.id", "=", $data->id)
            ->get();

        $stok_pengedar = DB::table('kariah_pengedar_qurban')
            ->where("kariah_id", "=", $data->id)
            ->sum('available_unit');


        $bilangan_korban = DB::table('maklumat_korban')
            ->where('id', '=', 1)
            ->value("kuantiti_lembu");

        $bilangan_ekor_korban = DB::table('kariah_booking_korban')
            ->where('pakej_korban', '=', '1 Ekor')
            ->count();
        $bilangan_bahagian_korban = DB::table('kariah_booking_korban')
            ->where('pakej_korban', '=', '1 Bahagian')
            ->count();

        if($bilangan_bahagian_korban > 7)
        {
            $subtotal = round($bilangan_bahagian_korban / 7);

            $total = $bilangan_ekor_korban + $subtotal;
            $baki_kuantiti_lembu_korban = $bilangan_korban - $total;
        }
        else{
            $total = $bilangan_ekor_korban;
            $baki_kuantiti_lembu_korban = $bilangan_korban - $total;
        }


        if($bilangan_korban == 0)
        {
            $baki_kuantiti_lembu_korban_percent = 0;
        }
        else
        {
            $baki_kuantiti_lembu_korban_percent = ($baki_kuantiti_lembu_korban/$bilangan_korban)*100;
        }

        $jumlah_tempahan_korban = DB::table('kariahs')
            ->join('kariah_booking_korban', 'kariahs.id', "=", 'kariah_booking_korban.kariah_id')
            ->where([
                ['status_pembayaran','=', 'paid'],
            ])
            ->count();

        $maklumat_korban = DB::table('maklumat_korban')
            ->where('id', '=', 1)
            ->get();

        return view('kariah_dashboard', compact('data', 'kariahPengedar', 'stok_pengedar', 'baki_kuantiti_lembu_korban', 'baki_kuantiti_lembu_korban_percent', 'kariahKorban', 'jumlah_tempahan_korban', 'maklumat_korban'));
    }

    public function kariahLogout()
    {
        if(session('loginId')){
            session()->pull('loginId');
            return redirect('kariah_register');
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
    public function kariah_maklumat_edit($id)
    {
        $kariah = DB::select('select * from kariahs where id = ?', [$id]);
        return view('kariah_maklumat_update', ['kariah' => $kariah]);
    }

    public function kariah_update(Request $request, $id)
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

        return redirect('kariah_dashboard')->with('success', 'Data Dikemaskini.');
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
        $kariahs = Kariah::where('id', $id)
            ->update([
                'ic_number' => $request->input('inputIC_number'),
                'name' => $request->input('inputName'),
                'phone' => $request->input('inputPhone'),
                'address1' => $request->input('inputAddress1'),
                'address2' => $request->input('inputAddress2'),
                'city' => $request->input('inputCity'),
                'state' => $request->input('inputState'),
                'email' => $request->input('inputEmail'),
                'password' => $request->input('inputPassword'),
        ]);
    }

    public function update_peserta_name(Request $request, $id)
    {
        $update_peserta_name = $request->input('nama_peserta');

        $req = DB::table('kariah_booking_korban')
                    ->where('id', '=', [$id])
                    ->update(['peserta_name' => $update_peserta_name]);

        return back()->with('success', 'Nama Peserta Sudah Dikemaskini.');

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
