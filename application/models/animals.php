<?php

class Animal extends MY_Model {

	const DB_TABLE    = 'animals';
	const DB_TABLE_PK = 'animal_id';

	/**
	 * Animal unique identifier.
	 * @var int
	 */
	public $animal_id;

	/**
	 * Animal name.
	 * @var string
	 */
	public $animal_name;
}
