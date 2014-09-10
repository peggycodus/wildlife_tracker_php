<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animal extends CI_Controller {

public function index() {

        $this->load->view('bootstrap/header');
        $this->load->library('table');
        $animals = array();
        $this->load->model(array('Animal'));
        $animals = $this->animal->get();
        foreach ($animals as $animal) {
            $animals[] = array(
                $ID->animal_id
                $name->animal_name
            );
        }
        $this->load->view('animals', array(
            'animals' => $animals
        ));
        $this->load->view('bootstrap/footer');
    }

    /**
     * Add an Animal.
     */
    public function add() {
        // Populate animals.
 //       $this->load->view('bootstrap/header');
        $this->load->model('Animal');
        $this->load->helper('form');
        $animals = $this->Animal->get();
        $animal_form_options = array();
        foreach ($animals as $id => $animal) {
            $animal_form_options[$id] = $animal->animal_name;
        }
        // Validation.
        $this->load->library('form_validation');
        $this->form_validation->set_rules(array(
           array(
               'field' => 'animal_id',
               'label' => 'Animal ID',
               'rules' => 'required',
           ),

           array(
               'field' => 'animal_name',
               'label' => 'Name',
               'rules' => 'required',
           ),
        ));
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if (!$this->form_validation->run()) {
            $this->load->view('animal_form', array(
                'animal_form_options' => $animal_form_options,
            ));
        }
        else {

            $animal->save();
            $this->load->view('animal_form_success', array(
                'animal' => $animal,
            ));
        }
 //       $this->load->view('bootstrap/footer');
    }
