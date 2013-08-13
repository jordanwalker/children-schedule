<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forge extends MY_Controller {
	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function set(){}
	public function get(){}
	
	// build the table
	# change
	private function forge_change(){
		$this->load->dbforge();
		$database_objects = array(
			'id'=>array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'id_child'=>array('type'=>'int','constraint'=>'12','null'=>false),
			'time'=>array('type'=>'time','null'=>false),
			'status'=>array('type'=>'varchar','constraint'=>'255','null'=>false),
			'note'=>array('type'=>'text','null'=>true),
		);
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		$this->dbforge->add_key('id_child');
		$this->dbforge->create_table('change',TRUE);
	}
	
	# child
	function forge_child(){
		$this->load->dbforge();
		$database_objects = array(
			'id'=>array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'unique'=>array('type'=>'varchar','constraint'=>'11','null'=>false),
			'name'=>array('type'=>'varchar','constraint'=>'255','null'=>false),
			'birthday'=>array('type'=>'datetime','null'=>false),
			'gender'=>array('type'=>'varchar','constraint'=>'6','null'=>false),
			'eye_color'=>array('type'=>'varchar','constraint'=>'50','null'=>false),
			'hair_color'=>array('type'=>'varchar','constraint'=>'50','null'=>false),
			'height'=>array('type'=>'varchar','constraint'=>'50','null'=>false),
			'weight'=>array('type'=>'varchar','constraint'=>'50','null'=>false),
			'biography'=>array('type'=>'varchar','constraint'=>'50','null'=>false),
			'public'=>array('type'=>'int','constraint'=>'1','null'=>false),
		);
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('child',TRUE);
	}
	
	# eat
	function forge_eat(){
		$this->load->dbforge();
		$database_objects = array(
			'id'=>array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'id_child'=>array('type'=>'int','constraint'=>'12','null'=>false),
			'id_food'=>array('type'=>'int','constraint'=>'12','null'=>false),
			'start'=>array('type'=>'datetime','null'=>false),
			'stop'=>array('type'=>'datetime','null'=>false),
			'amount'=>array('type'=>'varchar','constraint'=>'20','null'=>false),
		);
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		$this->dbforge->add_key('id_food');
		$this->dbforge->add_key('id_child');
		$this->dbforge->create_table('eat',TRUE);
	}
	
	
/*
E=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `food` (
  `id` int(12) NOT NULL,
  `child_id` int(12) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `arrival` time NOT NULL,
  `departure` time NOT NULL,
  `instructions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `health` (
  `id` int(12) NOT NULL DEFAULT '0',
  `child_id` int(12) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `medication` varchar(255) NOT NULL,
  `pediatrician` varchar(255) NOT NULL,
  `duration` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `sleep` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `start` time NOT NULL,
  `stop` time NOT NULL,
  `temperature` varchar(5) NOT NULL,
  `humidity` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `supplies` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `watch` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `child_id` int(12) NOT NULL,
  `signs` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `events` varchar(255) NOT NULL,
  `oral_intake` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `child_id` (`child_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

}

/* End of file watch.php */
/* Location: ./application/controllers/watch.php */