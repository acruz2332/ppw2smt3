<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Jobs\SendMailJob;
use App\Mail\SendEmail;
class SendEmailController extends Controller
{
    public function index(){
        return view('kirim-email');
    }

    public function store(Request $request){
        $data = $request->all();

        dispatch(new SendMailJob($data));
        return redirect()->route('kirim-email')->with('status', 'email berhasil dikirim');
    }

}
