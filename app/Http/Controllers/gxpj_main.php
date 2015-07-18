<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gxpj_main extends Controller {

	protected static $viewsList = [
		'index' 		=> 0,
		'institude'		=> 1,
		'analyst'		=> 2,
		'model'			=> 3,
		'course'		=> 4,
		'books'			=> 5,
		'enrollment' 	=> 0
	];

	public function actureView($name){
		view()->share('menuId', gxpj_main::$viewsList[$name]);
		return view($name);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->actureView('index');
	}

	public function institude()
	{
		return $this->actureView('institude');
	}

	public function analyst()
	{
		return $this->actureView('analyst');
	}

	public function books()
	{
		return $this->actureView('books');
	}

	public function course()
	{
		return $this->actureView('course');
	}

	public function enrollment()
	{
		return $this->actureView('enrollment');
	}

	public function model()
	{
		return $this->actureView('model');
	}
}
