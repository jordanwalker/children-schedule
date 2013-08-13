<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forge extends MY_Controller {
	function __construct(){
        parent::__construct();
        $this->load->dbforge();
       
    }
    
	public function index(){
		echo "forge:";
	}
	
	public function build($name=null){

		// 1. build the database
		$forge_database = $this->_create_database($name);
		if($forge_database){
			echo "database successfully created";
		}else{
			echo "error creating database";
		}
		echo "<br/>";
		
		// 2. build the tables
		$db_config = $this->load->database('children_schedule', TRUE);
		
		#change
		$forge_change = $this->forge_change();
		if($forge_change){
			echo "change table created";
		}else{
			echo "error change table ";
		}
		echo "<br/>";
		
		#child
		$forge_child = $this->forge_child();
		if($forge_child){
			echo "child table created";
		}else{
			echo "error child table ";
		}
		echo "<br/>";
		
		#eat
		$forge_eat = $this->forge_eat();
		if($forge_eat){
			echo "eat table created";
		}else{
			echo "error eat table ";
		}
		echo "<br/>";
		
		#food
		$forge_food = $this->forge_food();
		if($forge_food){
			echo "food table created";
		}else{
			echo "error food table ";
		}
		echo "<br/>";
		
		#health
		$forge_health = $this->forge_health();
		if($forge_health){
			echo "health table created";
		}else{
			echo "error health table ";
		}
		echo "<br/>";
		
		#sleep
		$forge_sleep = $this->forge_sleep();
		if($forge_sleep){
			echo "sleep table created";
		}else{
			echo "error sleep table ";
		}
		echo "<br/>";
		
		#watch
		$forge_watch = $this->forge_watch();
		if($forge_watch){
			echo "watch table created";
		}else{
			echo "error watch table ";
		}
		echo "<br/>";
	}
	
	/*
	 * DATABASE
	*/
	
	// create database
	private function _create_database($db_name){
		return $this->dbforge->create_database($db_name);
	}
	// drop database
	public function drop_database($db_name){
		return $this->dbforge->drop_database($db_name);
	}
	
	/*
	 * TABLE
	 */
	
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
		return $this->dbforge->create_table('change',TRUE);
	}
	
	# child
	private function forge_child(){
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
		return $this->dbforge->create_table('child',TRUE);
	}
	
	# eat
	private function forge_eat(){
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
		return $this->dbforge->create_table('eat',TRUE);
	}
	
	# food
	private function forge_food(){
		$this->load->dbforge();
		$database_objects = array(
			'id'			=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'id_child'		=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => false),
			'item'			=> array('type'=>'varchar','constraint'=>'255','null'=>false),
			'quantity'		=> array('type'=>'varchar','constraint'=>'255','null'=>false),
			'arrival'		=> array('type'=>'datetime','null'=>false),
			'departure'		=> array('type'=>'datetime','null'=>false),
			'instructions'	=> array('type'=>'varchar','constraint'=>'255','null'=>false),
		);
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		$this->dbforge->add_key('id_child');
		return $this->dbforge->create_table('food',TRUE);
	}	

	#health
	private function forge_health(){
		$this->load->dbforge();
		$database_objects = array(
			'id'			=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'id_child'		=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => false),
			'allergies'		=> array('type'=>'varchar','constraint'=>'255','null'=>false),
			'medication'	=> array('type'=>'varchar','constraint'=>'255','null'=>false),
			'pediatrician'	=> array('type'=>'varchar','constraint'=>'255','null'=>false),
			'duration'		=> array('type'=>'varchar','constraint'=>'255','null'=>false),
		);
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		$this->dbforge->add_key('id_child');
		return $this->dbforge->create_table('health',TRUE);
	}
	
	#sleep
	private function forge_sleep(){
		$this->load->dbforge();
		$database_objects = array(
			'id'=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'id_child'=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => false),
			'allergies'=> array('type'=>'varchar','constraint'=>'255','null'=>false),
			'start'=>array('type'=>'datetime','null'=>false),
			'stop'=>array('type'=>'datetime','null'=>false),
			'temperature' => array('type'=>'varchar','constraint'=>'255','null'=>false),
			'humidity' => array('type'=>'varchar','constraint'=>'255','null'=>false),
		);
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		$this->dbforge->add_key('id_child');
		return $this->dbforge->create_table('sleep',TRUE);
	}	
	
	#watch
	private function forge_watch(){
		$this->load->dbforge();
		$database_objects = array(
			'id'=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'id_child'=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => false),
			'signs' => array('type'=>'varchar','constraint'=>'255','null'=>false),
			'symptoms' => array('type'=>'varchar','constraint'=>'255','null'=>false),
			'events' => array('type'=>'varchar','constraint'=>'255','null'=>false),
			'oral_intake' => array('type'=>'varchar','constraint'=>'255','null'=>false),
		);
		
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		$this->dbforge->add_key('id_child');
		return $this->dbforge->create_table('watch',TRUE);
	}
	
	/*
	 * REST 
	 */
	
	#keys
	private function forge_keys(){
		$this->load->dbforge();
		$database_objects = array(
			'id'=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'key' => array('type'=>'varchar','constraint'=>'40','null'=>false),
			'level'=> array('type'=>'int','constraint'=>'2','null'=>false, 'auto_increment' => false),
			'ignore_limits'=> array('type'=>'tinyint','constraint'=>'1','null'=>false, 'default'=> 0 ),
			'is_private_key'=> array('type'=>'tinyint','constraint'=>'1','null'=>false, 'default'=> 0 ),
			'ip_addresses'=> array('type'=>'text','null'=>true),
			'date_created'=> array('type'=>'int','constraint'=>'11','null'=>false,),
		);
	
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
		
		return $this->dbforge->create_table('keys',TRUE);
	}
	
	#logs
	private function forge_logs(){
		$this->load->dbforge();
		$database_objects = array(
			'id'=> array('type'=>'int','constraint'=>'12','null'=>false, 'auto_increment' => TRUE),
			'uri' => array('type'=>'varchar','constraint'=>'255','null'=>false),
			'method' => array('type'=>'varchar','constraint'=>'6','null'=>false),				
			'params'=> array('type'=>'text','null'=>true),
			'api_key' => array('type'=>'varchar','constraint'=>'40','null'=>false),
			'ip_address'=> array('type'=>'varchar','constraint'=>'45','null'=>false),
			'time'=> array('type'=>'int','constraint'=>'11','null'=>false),
			'authorized'=> array('type'=>'tinyint','constraint'=>'1','null'=>false),
		);
	
		$this->dbforge->add_field($database_objects);
		$this->dbforge->add_key('id');
	
		return $this->dbforge->create_table('logs',TRUE);
	}
	
	/*
	 * TABLE UTILITY
	 */
	private function _drop($table_name){
		return $this->dbforge->drop_table($table_name);
	}
	private function _rename($old_table_name, $new_table_name){
		return $this->dbforge->rename_table($old_table_name, $new_table_name);
	}
}

/* End of file watch.php */
/* Location: ./application/controllers/watch.php */