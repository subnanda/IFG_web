<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class EmailController extends Controller
{
    public function index(HttpRequest $request)
    {
        $request->validate([
            'nama' => 'required|max:25',
            'email' => 'required|email',
            'pesan' => 'required|max:300',
        ]);

        $details = [
            'title' => 'Layanan Keterbukaan Informasi Publik',
            'nama' => strip_tags($request->nama),
            'email' => strip_tags($request->email),
            'pesan' => $request->pesan,
        ];

        Mail::to('eppid@ifg.id')->send(new \App\Mail\SendMail($details));

        $response = [
            'status' => 'success',
            'message' => 'Pesan berhasil dikirim'
        ];

        return json_encode($response);
    }
}
