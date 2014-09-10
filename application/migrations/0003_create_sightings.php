<?php

class Migration_Sightings extends CI_Migration {
	public function up() {
		$this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
		$this->dbforge->add_field("animal_id int(11) NOT NULL DEFAULT ''");
		$this->dbforge->add_field("region_id int(11) NOT NULL DEFAULT ''");
		$this->dbforge->add_field("latitude decimal(5,2)  DEFAULT ''");
		$this->dbforge->add_field("longitude decimal(5,2)  DEFAULT ''");
		$this->dbforge->add_field("sight_date date NOT NULL DEFAULT ''");

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('sightings', TRUE);
	}

	public function down() {
		$this->dbforge->drop_table('sightings');
	}
}
