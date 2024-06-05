<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public function logoClin()
	{

		return view('logoClin');
	}

	public function __construct()
	{
		$this->middleware('auth');
	}


	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $req)
	{
		$operador_logado = Auth::user();
		// dd(Session::get('variableName'));

		$dados = $req->all();

		if (Gate::allows('admin_home')) {

			$user = Auth::user();
			$now = Carbon::now();
			$month = $now->month;
			$year = $now->year;
			$tomorow =  \Carbon\Carbon::today()->addHours(24);

			$available_for_display =  \Carbon\Carbon::today()->addHours(120);
			$firstOfMonth = \Carbon\Carbon::today()->firstOfMonth(); //recupera o 1º dia do mes
			$firstOfYear = \Carbon\Carbon::today()->firstOfYear();

			$endOfMonth = \Carbon\Carbon::today()->endOfMonth();


			$status = \App\ServiceStatus::whereIn('id', [1, 2, 3, 4])->get()->pluck('id')->toArray();

			$actualyMonth = \Carbon\Carbon::now()->format('M-y');

			$qtClients = \App\User::whereHas(
				'address.neighborhood',
				function ($query) use ($operador_logado) {
					$query->whereIn('region_id', $operador_logado->franchise->getIdRegions());
				}
			)
				->where('role_id', 4)->count();

			$qtServices = Service::where('franchise_id', $operador_logado->franchise_id)->where('status_id', 4)->count();

			$qtServicesofMonth = \App\Service::where('start_time', '>', $firstOfMonth)
				->where('franchise_id', $operador_logado->franchise_id)
				->where('start_time', '<=', $endOfMonth)
				->whereIn('status_id', $status)->count();

			$status_open = \App\ServiceStatus::where('title', 'Aberta')->first()->id;

			$services = \App\Service::where('status_id', $status_open)->where('franchise_id', $operador_logado->franchise_id)->where('start_time', '<=', $available_for_display)->orderBy('start_time', 'ASC')->get();

			$qtProfissionais = \App\User::where('role_id', 3)
				->whereHas(
					'address.neighborhood',
					function ($query) use ($operador_logado) {
						$query->whereIn('region_id', $operador_logado->franchise->getIdRegions());
					}
				)
				->where('status', 1)->count();

			$qtSubscriptions = \App\Subscription::whereIn('status_id', [1, 3, 4, 5])->where('franchise_id', $operador_logado->franchise_id)->count();

			$newSubscriptions = \App\Subscription::with('whoScheduled', 'status', 'user', 'subscriptionDayWeeks', 'client')
				->where('franchise_id', $operador_logado->franchise_id)
				->whereBetween('created_at', ["$year-$month-01 00:00:00", "$year-$month-31 00:00:00"])->whereIn('status_id', [4, 5])->get();

			$failedSubscriptions = \App\Subscription::where('franchise_id', $operador_logado->franchise_id)
				->where('status_id', 5)->get();

			$subscriptions = $newSubscriptions->merge($failedSubscriptions);

			$clients = \App\User::whereHas(
				'address.neighborhood',
				function ($query) use ($operador_logado) {
					$query->whereIn('region_id', $operador_logado->franchise->getIdRegions());
				}
			)
				->where('role_id', 4)->latest()->limit(10)->get();

			$lastServices = Service::has('service_slots')->doesntHave('free_slots')
				->where('franchise_id', $operador_logado->franchise_id)
				->latest()->limit(10)->get();


			$servicesOfMonth = Service::where('start_time', '>=', $firstOfMonth)->where('franchise_id', $operador_logado->franchise_id)->where('start_time', '<=', $endOfMonth)->whereIn('status_id', $status);
			$servicesOfMonthIds = Service::where('start_time', '>', $firstOfMonth)
				->where('franchise_id', $operador_logado->franchise_id)
				->whereIn('status_id', $status)
				->select('id');

			$totalValueMonth = $servicesOfMonth->sum('value');


			$servicesOfMonthToday = Service::where('start_time', '<', $tomorow)->where('franchise_id', $operador_logado->franchise_id)->whereIn('id', $servicesOfMonthIds);
			$totalValueMonthToday = $servicesOfMonthToday->sum('value');

			//show Services with To Approve status with start_time <= 5 days
			$servicesWithOutPayments = \App\Service::whereDoesntHave('service_slots')->where('franchise_id', $operador_logado->franchise_id)
				->where('status_id', 1)->where('start_time', '<=', $available_for_display)->orderBy('start_time', 'ASC')->get();

			$leads = \App\Service::where('franchise_id', $operador_logado->franchise_id)->where('status_id', 6)->get();

			$req->session()->flash('admin-mensagem-sucesso', 'Seja bem vindo de volta' . ' ' . $operador_logado->name);

			$ratingLastYear = RatingController::rating($firstOfYear, $operador_logado);

			$ratingLastMonth = RatingController::rating($firstOfMonth, $operador_logado);

			return view('home', compact('leads', 'services', 'subscriptions', 'servicesWithOutPayments', 'actualyMonth', 'operador_logado', 'ratingLastMonth', 'ratingLastYear', 'qtSubscriptions', 'totalValueMonthToday', 'totalValueMonth', 'clients', 'lastServices', 'qtClients', 'qtServices', 'qtServicesofMonth', 'qtProfissionais'));
		}
	}
}
