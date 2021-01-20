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
                return view ('home',
                [
                    'id' => request('id'),
                    'dob' => request('dob'),
                    'err' => 'That ID is in our database, but the birthdate 
                    and ID do not match.'
                ]);
            }
        } else {
            return view('home',
                [
                    'id' => request('id'),
                    'dob' => request('dob'),
                    'err' => 'That ID is not in our database.'
                ]);
        }
    }
}