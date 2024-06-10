<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function hasil()
    {
        return view('hasil');
    }

    public function bmi(Request $request)
    {
        $request->validate([
            'weight' => 'required',
            'height' => 'required',
        ]);

        $weight = $request->weight;
        $height = $request->height / 100;

        $bmi =  $weight / ($height * $height);

        if ($bmi < 18.5) {
            $keterangan = 'Anda Kekurangan berat badan';

        } else if ($bmi <= 24.9) {
            $keterangan = 'Berat Badan Anda Normal';

        } else if ($bmi <= 29.9) {
            $keterangan = 'Anda Kelebihan berat badan';

        } else {
            $keterangan = 'Anda Kegemukan (Obesitas)';
        };

        return redirect()->route('hasil')->with('hasil', $keterangan);
    }
}
