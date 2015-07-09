<?php 
	/**
	* 
	*/
	class DestinasiController extends BaseController
	{
		
		public function view($jenis)
		{
			switch ($jenis) {
				case 'bangunan-cagar-budaya':
					return View::make('bangunan-cagar-budaya',array('pageTitle'=>'Bangunan dan Cagar Budaya'));
				break;
				case 'kampung-wisata':
					return View::make('kampung-wisata',array('pageTitle'=>'Kampung Wisata'));
				break;
				case 'landmark':
					return View::make('landmark',array('pageTitle'=>'Landmark'));
				break;
				case 'museum':
					return View::make('museum',array('pageTitle'=>'Museum'));
				break;
				case 'night-life':
					return View::make('night-life',array('pageTitle'=>'Night Life'));
				break;
				default:
					# code...
				break;
			}
		}
	}
	?>