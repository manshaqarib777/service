<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebToPay;
use WebToPayException;
use App\Models\State;
use App\Models\Area;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Support\Facades\Artisan;
use Laracasts\Flash\Flash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function ajaxGetStates()
    {
        $country_id = $_GET['country_id'];
        $states = State::where('country_id', $country_id)->get();
        return response()->json($states);
    }
    public function ajaxGetAreas()
    {
        $state_id = $_GET['state_id'];
        $areas = Area::where('state_id', $state_id)->get();
        return response()->json($areas);
    }
    public function changeCountry(Request $request)
    {

        //dd($request->all());
        $request->session()->put('country', $request->country);

        $country = Country::where('code', $request->country)->get()->first();
        //dd($country);

        $currency = Currency::where('code', $country->currency->code)->first();
        if (!$currency) {
            $currency = Currency::get()->first();
            $request->session()->put('currency_code', $currency->code);
            Flash::success(__('lang.updated_successfully', ['operator' => __('lang.country')]));
            Artisan::call("config:clear");
        } else {
            $request->session()->put('currency_code', $currency->code);
            Flash::success(__('lang.updated_successfully', ['operator' => __('lang.country')]));
            Artisan::call("config:clear");
        }
        return redirect()->back();

    }
}