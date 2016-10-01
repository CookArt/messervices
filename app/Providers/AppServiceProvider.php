<?php namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
//		$categ = array();
//		$services = array();
//		$libTheme = array();
//		$categories = DB::table('themes')
//			->select()
//			->get();
//        foreach ($categories as $categorie) {
//			$libTheme[] = $categorie->libelleTheme;
//			foreach ( DB::table('services')->select('libelleService')->where('theme_id',$categorie->id)->get() as $service){
//				$services[]=$service;
//			}
//			$categ[]=array_push($libTheme,$services);
//		}
//        View::share('services',$categ);
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
