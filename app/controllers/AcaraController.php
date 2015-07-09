<?php 
	/**
	* 
	*/
	class AcaraController extends BaseController
	{
		
		public function view()
		{
			return View::make('acara-dan-atraksi',array('pageTitle'=>'Acara dan Atraksi'));
		}
	}
 ?>