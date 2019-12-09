<?php

namespace App\Http\Controllers;

use App\CheckInOut;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

class CheckInOutController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'check_in_out' => 'required',
        ]);

        // dd($data);

        $CheckInOut = new CheckInOut();

        $CheckInOut->fill($data);

        // dd($leaves);
        $CheckInOut->user()->associate(auth()->user());

        // dd($CheckInOut);
        $CheckInOut->save();


        // dd($leaves);

        return redirect()->to('/');

    }
}
