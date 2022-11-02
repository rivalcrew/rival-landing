<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_modify_add_column_userId_to_teams extends CI_Migration {

	/**
	 * Name of the table to be used in this migration!
	 *
	 * @var user_id
	 */
	protected $_table_name = "teams";

	public function up()
	{
		$this->dbforge->add_column($this->_table_name, $this->_fields());
	}

	public function down()
	{
		if (is_array($this->_fields()))
		{
			foreach($this->_fields() as $key => $val)
			{
				$this->dbforge->drop_column($this->_table_name,$key);
			}
		}
	}

	/**
	 * Returns an array of the fields to be used within the up and down functions!
	 *
	 * @return array
	 */
	protected function _fields()
	{
		return array(
			'user_id' => array(
				'type' => 'VARCHAR',
				'constraint' => '5',
			)
		);
	}

}

?>