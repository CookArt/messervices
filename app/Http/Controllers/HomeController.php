<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Information;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    /**
     *
     */
    public function __construct()
	{
		$this->middleware('auth', ['except'=>['contact','terms','index']]);
	}

    /**
     * @return \Illuminate\View\View
     */
    public function index()
	{
//		$recents = DB::table('annonces')
//			->join('services','annonces.service_id','=','services.id')
//			->selectRaw('annonces.id,services.id as service_id, annonces.titreAnnonce,annonces.created_at,services.libelleService,annonces.prix')
//			->orderBy('annonces.created_at')
//			->get();
//		if(Auth::check()){
//			$this->compteur();
//			$this->nonlu();
//			$infos = DB::table('information')->select()->where('user_id',Auth::user()->id)->first();
//			return view('home', compact(['infos','recents']));
//		}
//		return view('home', compact(['recents']));
	return view('home');
	}

	public function saveInfo()
	{
		$this->compteur();
		$this->nonlu();
		$input = Request::all();

		if(Request::file('photo')) {
			$imageName = Auth::user()->firstname . '_' . str_random(10) . '.' . Input::file('photo')->getClientOriginalExtension();
			$input['photo'] = $imageName;

			Request::file('photo')->move(base_path() . '/public/img/utilisateurs', $imageName);
		}
		else{
			$input['photo'] = 'default.png';
		}
		Information::create($input);

		return redirect('/');
	}



    /**
     * @return \Illuminate\View\View
     */
    public function contact()
    {
		if(Auth::check()){
		$this->compteur();
		$this->nonlu();}
        return view('contact');
    }

	public function terms(){
		return view('auth.terms');
	}
}
