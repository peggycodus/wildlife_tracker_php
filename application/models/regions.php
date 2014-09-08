<?php

class Region extends MY_Model {

	const DB_TABLE    = 'regions';
	const DB_TABLE_PK = 'region_id';

	/**
	 * region unique identifier.
	 * @var int
	 */
	public $region_id;

	/**
	 * region name.
	 * @var string
	 */
	public $region_name;
}
