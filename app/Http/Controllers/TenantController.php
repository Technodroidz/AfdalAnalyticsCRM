<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class TenantController extends Controller
{
    //
    public function userhome(Request $request){
        return view('userhome');
    }

    public function upgradeplan(Request $request){
        return view('upgradeplan');
    }

    public function userreview(Request $request){
        return view('userreview');
    }

    public function dashboard(Request $request){
        return view('dashboard');
    }

    public function dashboard2(Request $request){
        return view('dashboard2');
    }

    public function connections(Request $request){
        return view('connections');
    }

    public function help(Request $request){
        return view('help');
    }

    public function settings(Request $request){
        return view('settings');
    }

    public function template(Request $request){
        return view('template');
    }

    public function resource(Request $request){
        return view('resource');
    }

    public function resource2(Request $request){
        return view('resource2');
    }

    public function contactus(Request $request){
        return view('contactus');
    }

    public function pricing(Request $request){
        return view('pricing');
    }

    public function twitterperformance(Request $request){
        return view('twitterperformance');
    }

    public function googleplaystore(Request $request){
        return view('googleplaystore');
    }
    

    public function instagraminsight(Request $request){
        return view('instagraminsight');
    }
}
