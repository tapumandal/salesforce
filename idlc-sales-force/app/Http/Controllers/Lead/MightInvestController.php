<?php

namespace App\Http\Controllers\lead;

use App\Http\Controllers\Message\ActionMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;

class MightInvestController extends Controller
{
    public function viewMightInvest(){
    	return view('lead.might_invest.mightInvestList');
    }
}
