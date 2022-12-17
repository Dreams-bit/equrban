<?php

namespace App\Http\Controllers;

use App\Models\KariahKorban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ToyyibpayController extends Controller
{
    public function create($id){

        $kariah_payment = DB::table('kariah_booking_korban_table')
                ->join('kariahs', 'kariahs.id', "=", 'kariah_booking_korban_table.kariah_id')
                ->where("kariahs.id", "=", $id)
                ->get()
                ->first();
        $jumlah_korban_payment = DB::table('kariah_booking_korban_table')
                ->where("kariah_id", "=", $id)
                ->sum('harga_korban');

        //dd($kariah_payment);

        $name = $kariah_payment->peserta_name;
        $description = $kariah_payment->pakej_korban;
        $phone = $kariah_payment->phone;
        $email = $kariah_payment->email;
        $total_payment = ($jumlah_korban_payment*100);



        $option = array(
            'userSecretKey'=>config('toyyibpay.key'),
            'categoryCode'=>config('toyyibpay.category'),
            'billName'=>'E-Qurban Surau Al-Muhajirin',
            'billDescription'=>$description,
            'billPriceSetting'=>1,
            'billPayorInfo'=>1,
            'billAmount'=>100,
            'billReturnUrl'=>route('toyyibpay_status'),
            'billCallbackUrl'=>route('toyyibpay_callback'),
            'billExternalReferenceNo' => 'AFR341DFI',
            'billTo'=>$name,
            'billEmail'=>$email,
            'billPhone'=>$phone,
            'billSplitPayment'=>0,
            'billSplitPaymentArgs'=>'',
            'billPaymentChannel'=>0,
          );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/createBill');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $option);
        $result = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);
        $obj = json_decode($result,true);
        //dd($obj);
        $billcode=$obj[0]['BillCode'];

        return redirect('https://dev.toyyibpay.com/'.$billcode);
    }

    public function status(){
        $response = request()->all('status_id', 'billcode', 'order_id');
        //dd($response);
        $some_data = array(
            'billCode' => $response['billcode'],
            'billpaymentStatus' => $response['status_id']
          );

          $curl = curl_init();

          curl_setopt($curl, CURLOPT_POST, 1);
          curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/getBillTransactions');
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

          $result = curl_exec($curl);
          $info = curl_getinfo($curl);
          curl_close($curl);

          $arrCollection = json_decode($result,true);

        //dd($arrCollection[0]['billpaymentAmount']);

        //billExternalReferenceNo = kariah_id
        /**$kariah_payment = DB::table('kariah_booking_korban_table')
                ->join('kariahs', 'kariahs.id', "=", 'kariah_booking_korban_table.kariah_id')
                ->where("kariahs.id", "=", $arrCollection[0]['billExternalReferenceNo'])
                ->get()
                ->first();**/

        KariahKorban::create([
                        'peserta_name' => $arrCollection[0]['billTo'],
                        'pakej_korban' => $arrCollection[0]['billDescription'],
                        'harga_korban' => $arrCollection[0]['billpaymentAmount'],
                        'status_pembayaran' => 'pending',
                        'receipt_name' => $response['billcode'],
                        'file_path' => "FPX Payment",
                        'hari_korban' => 'Belum Ditetapkan',
                        'waktu_sembelihan' => 'Belum Ditetapkan',
                        'kariah_id' => 1,
        ]);

        DB::table('kariah_booking_korban_table')->delete();

        return redirect('kariah_dashboard')
            ->with('success',"Payment Completed")
            ->with($response);
    }

    public function callBack(){
        $response = request()->all('refno','status', 'reason', 'billcode', 'order_id', 'amount');
        //dd($response);
    }
}
