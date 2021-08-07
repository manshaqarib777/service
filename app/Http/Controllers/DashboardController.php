<?php
/*
 * File name: DashboardController.php
 * Last modified: 2021.02.22 at 14:52:03
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Http\Controllers;

use App\Repositories\BookingRepository;
use App\Repositories\EarningRepository;
use App\Repositories\EProviderRepository;
use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Repositories\CountryRepository;
use Illuminate\Http\Request;
use App\Repositories\PaymentRepository;
use DB;
class DashboardController extends Controller
{

    /** @var  BookingRepository */
    private $bookingRepository;


    /**
     * @var UserRepository
     */
    private $userRepository;

    /** @var  EProviderRepository */
    private $eProviderRepository;
    /** @var  EarningRepository */
    private $earningRepository;
    private $countryRepository;
    private $paymentRepository;


    public function __construct(BookingRepository $bookingRepo, UserRepository $userRepo, EarningRepository $earningRepository, EProviderRepository $eProviderRepo,CountryRepository $countryRepository, PaymentRepository $paymentRepo)
    {
        parent::__construct();
        $this->bookingRepository = $bookingRepo;
        $this->userRepository = $userRepo;
        $this->eProviderRepository = $eProviderRepo;
        $this->earningRepository = $earningRepository;
        $this->countryRepository = $countryRepository;
        $this->paymentRepository = $paymentRepo;


    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index(Request $request)
    {
        $country_id=1;
        
        if($request->input('country_id'))
        {
            $country_id=$request->input('country_id');
        }
        $country = $this->countryRepository->find($country_id);
        $countries = $this->countryRepository->all()->pluck('name','id');


        if (auth()->user()->hasRole('branch'))
        {
            $bookingsCount = $this->bookingRepository->whereHas('eService.country', function($q) use ($country_id){
                return $q->where('countries.id',$country_id);
            })->count();    
            $membersCount = $this->userRepository->where('country_id',$country_id)->count();
            $eprovidersCount = $this->eProviderRepository->where('country_id',$country_id)->count();
            $eProviders = $this->eProviderRepository->where('country_id',$country_id)->limit(4)->get();
            $earning = $this->paymentRepository->whereHas('user.country', function($q){
                return $q->where('countries.id',get_role_country_id('branch'));
            })->where('payments.payment_status_id', 2)->sum('amount');
            $ajaxEarningUrl = route('payments.byMonth', ['api_token' => auth()->user()->api_token]);
        }
        else if(auth()->user()->hasRole('provider'))
        {

            $eProviderId = DB::raw("json_extract(e_provider, '$.id')");
            $bookingsCount = $this->bookingRepository->with("user")->with('eService.country')->with('eService.country')->with("bookingStatus")->with("payment")->with("payment.paymentStatus")->join("e_provider_users", "e_provider_users.e_provider_id", "=", $eProviderId)
                ->where('e_provider_users.user_id', auth()->id())
                ->groupBy('bookings.id')
                ->get()->count();
    
            $membersCount = $this->userRepository->where('id',auth()->id())->get()->count();


            $eprovidersCount = $this->eProviderRepository->with('country')
            ->with("eProviderType")
            ->join("e_provider_users", "e_provider_id", "=", "e_providers.id")
            ->where('e_provider_users.user_id', auth()->id())
            ->groupBy("e_providers.id")
            ->select("e_providers.*")->get()->count();
            $eProviders = $this->eProviderRepository->with('country')
            ->with("eProviderType")
            ->join("e_provider_users", "e_provider_id", "=", "e_providers.id")
            ->where('e_provider_users.user_id', auth()->id())
            ->groupBy("e_providers.id")
            ->select("e_providers.*")->limit(4);
            $earning = $this->paymentRepository->with("user.country")
            ->with("paymentMethod")
            ->with("paymentStatus")
            ->join("bookings", "payments.id", "=", "bookings.payment_id")
            ->join("e_provider_users", "e_provider_users.e_provider_id", "=", $eProviderId)
            ->where('e_provider_users.user_id', auth()->id())
            ->where('payments.payment_status_id', 2)
            ->groupBy('payments.id')
            ->orderBy('payments.id', 'desc')
            ->select('payments.*')->get()->sum('amount');
            $ajaxEarningUrl = route('payments.byMonth', ['api_token' => auth()->user()->api_token]);

        }
        else
        {
            $bookingsCount = $this->bookingRepository->count();
            $membersCount = $this->userRepository->count();
            $eprovidersCount = $this->eProviderRepository->count();
            $eProviders = $this->eProviderRepository->limit(4)->get();
            $earning = $this->paymentRepository->where('payments.payment_status_id',2)->sum('amount');
            $ajaxEarningUrl = route('payments.byMonth', ['api_token' => auth()->user()->api_token]);

        }


        //dd($ajaxEarningUrl);
        return view('dashboard.index')
            ->with("ajaxEarningUrl", $ajaxEarningUrl)
            ->with("bookingsCount", $bookingsCount)
            ->with("eProvidersCount", $eprovidersCount)
            ->with("eProviders", $eProviders)
            ->with("membersCount", $membersCount)
            ->with("countries", $countries)
            ->with("earning", $earning)
            ->with("country", $country);
    }
}
