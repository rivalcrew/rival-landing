<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_teams extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var id
	 * @var name // Anakantoo FC
	 * @var location // state, city e.g. Selangor, Subang Jaya
	 * @var status // active, inactive, rejected
	 * 
	 */
	protected $_table_name = "teams";

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'location' => array(
				'type' => 'VARCHAR',
				'constraint' => '80',
			),
			'status' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),
		));

		$this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->dbforge->add_field("`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table($this->_table_name, TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>