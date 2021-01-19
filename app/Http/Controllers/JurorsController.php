<?php

namespace App\Http\Controllers;

use App\Models\Juror;
use Illuminate\Http\Request;

class JurorsController extends Controller
{
    public function store() 
    {
        $juror = Juror::find(request('id'));
        if ($juror) {
            $date=date_create(request('dob'));
            if ($juror->DOB === date_format($date, 'd-M-y')) {
                return view('show', ['juror' => $juror]);
            } else {
                dd('Id # found but the dob doesn\'t match');
            }
        } else {
            dd('Id not found');
        }
    }
}