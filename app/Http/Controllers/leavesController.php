<?php

namespace App\Http\Controllers;

use App\leaves;
use Illuminate\Http\Request;

class leavesController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'leave_type' => 'required',
            'start_date'  => 'required',
            'end_date'  => 'required',
            'reason'  => 'required',
        ]);


        $leaves = new leaves;

        $leaves->fill($data);

        // dd($leaves);
        $leaves->user()->associate(auth()->user());
        $leaves->save();


        // dd($leaves);

        return redirect()->to('/');

    }
}
