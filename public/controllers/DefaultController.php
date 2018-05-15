<?php
namespace Common\Controllers;

use App\Controller;

class DefaultController extends Controller
{

	/**
	* @var 		$routeParams
	* @access 	public
	*/
	public 		$routeParams;

	/**
	* @access 	public
	* @return 	void
	*/
	public function index()
	{
		$view = $this->setVariable('site_url', config('app')->get('app_url'));
		$view->render('home');
	}

	/**
	* {@inheritDOc}
	*/
	public function registerModel()
	{
		return \Common\Models\DefaultModel::class;
	}

}