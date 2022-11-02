<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_users extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var id
	 * @var name
	 * @var email
	 * @var username
	 * @var mobileNo
	 * @var password
	 * @var image
	 * @var status //active, inactive, rejected
	 * @var level_id // 1: superadmin, 2: admin, 3: user
	 * 
	 */
	protected $_table_name = "users";

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
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '80',
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'mobileNo' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
			),
			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE
			),
			'status' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),
			'level_id' => array(
				'type' => 'VARCHAR',
				'constraint' => '5',
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