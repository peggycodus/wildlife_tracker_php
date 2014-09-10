<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Sighting extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('bootstrap/header');
		$this->load->library('table');
		$sightings = array();
		$this->load->model(array('Sighting', 'Animal', 'Region'));

			$sightings[] = array(
				$sighting->latitude,
				$sighting->longitude,
				$sighting->date,
				$sighting->person,
				$animal->animal_name,
				$region->region_name,
			);
		}
		$this->load->view('sightings', array(
				'sightings' => $sightings,
			));
		$this->load->view('bootstrap/footer');
	}

	/**
	 * Date validation callback.
	 * @param string $input
	 * @return boolean
	 */
	public function date_validation($input) {
		$test_date = explode('-', $input);
		if (!@checkdate($test_date[1], $test_date[2], $test_date[0])) {
			$this->form_validation->set_message('date_validation', 'The %s field must be in YYYY-MM-DD format.');
			return FALSE;
		}
		return TRUE;
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
