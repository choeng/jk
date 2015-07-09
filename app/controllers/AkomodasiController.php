<?php  
/**
* 
*/
class AkomodasiController extends BaseController
{
	
	public function view($jenis)
	{
		switch ($jenis) {
			case 'hotel':
				return View::make('hotel',array('pageTitle'=>'Hotel'));
			break;
			case 'restoran':
				return View::make('restoran',array('pageTitle'=>'Restoran'));
			break;
			case 'transportasi':
				return View::make('transportasi',array('pageTitle'=>'Transportasi'));
			break;
			default:
				# code...
			break;
		}
	}
}

?>