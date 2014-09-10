<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Region extends CI_Controller {

public function index() {
        $this->load->view('bootstrap/header');
        $this->load->library('table');
        $regions = array();
        $this->load->model(array('Region'));
        $regions = $this->Region->get();
        foreach ($regions as $region) {
            $regions[] = array(
                $ID->region_id
                $name->region_name
            );
        }
        $this->load->view('regions', array(
            'regions' => $regions
        ));
    }

    /**
     * Add an region.
     */
    public function add() {
        // Populate regions.
        $this->load->view('bootstrap/header');
        $this->load->model('Region');
        $this->load->helper('form');
        $regions = $this->Region->get();
        $region_form_options = array();
        foreach ($regions as $id => $region) {
            $region_form_options[$id] = $region->region_name;
        }
        // Validation.
        $this->load->library('form_validation');
        $this->form_validation->set_rules(array(

           array(
               'field' => 'Region_name',
               'label' => 'Name',
               'rules' => 'required',
           ),
        ));
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if (!$this->form_validation->run()) {
            $this->load->view('region_form', array(
                'region_form_options' => $region_form_options,
            ));
        }
        else {

            $region->save();
            $this->load->view('region_form_success', array(
                'region' => $region,
            ));
        }
        $this->load->view('bootstrap/footer');
    }
