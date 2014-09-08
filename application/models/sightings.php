<?php

class Sightings extends MY_Model {

	const DB_TABLE    = 'sightings';
	const DB_TABLE_PK = 'sighting_id';

	/**
	 * sighting unique identifier.
	 * @var int
	 */
	public $sighting_id;

	/**
	 * animalunique identifier.
	 * @var int
	 */
	public $animal_id;

	/**
	 * region unique identifier.
	 * @var int
	 */
	public $region_id;

	/**
	 * latitude.
	 * @var int
	 */
	public $latitude;

	/**
	 * longitude.
	 * @var int
	 */
	public $longitude;
}
