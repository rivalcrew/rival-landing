<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_ci_sessions extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var string
	 */
	protected $_table_name = "ci_sessions";

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
			),
			'ip_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '45',
			),
			'timestamp' => array(
				'type' => 'INT',
				'constraint' => '10',
			),
			'data' => array(
				'type' => 'BLOB',
			),
		));

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('timestamp');
		$this->dbforge->create_table($this->_table_name, TRUE);
	}

	public function down()
	{
		$this->dbforge->drop_table($this->_table_name, TRUE);
	}

}

?>