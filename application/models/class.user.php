<?php
require_once($dir_class.'class.database.php');

/**
* User
*/
class User extends DatabaseObject{

	protected static $table_name = "users";
	public $id;
	public $name;
	public $email;
	public $password;
	public $type;
	public $created;

	protected static $db_fields = array('id', 'name', 'email', 'password', 'type', 'created');

	public static function authenticate($email="", $password="") {
		global $database;
		$email = $database->escape_value($email);
		$password = $database->escape_value($password);

		$sql  = "SELECT * FROM ".self::$table_name." ";
		$sql .= "WHERE email = '{$email}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";
		$result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false ;
	}

	//datbase object class file
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$table_name." ORDER BY id DESC");
	}

	public static function find_by_id($id=0) {
		$result_array = static::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id = {$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false ;
	}

	public static function find_by_access_token($email, $access_token) {
		$result_array = static::find_by_sql("SELECT * FROM ".self::$table_name." WHERE email = '{$email}' AND access_token = '{$access_token}' LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false ;
	}
	
	public static function find_by_email($email="") {
		$result_array = static::find_by_sql("SELECT * FROM ".self::$table_name." WHERE email = '{$email}' LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false ;
	}

	public static function find_by_sql($sql="") {
		global $database;
		$result_set = $database->query($sql);
		$object_array = array();
		while ($row = $database->fetch_array($result_set)) {
			$object_array[] = self::instantiate($row);
		}
		return $object_array;
	}

	private static function instantiate($record) {
		$object = new self;
		// $object->username  = $record['username'];
		// $object->firstname = $record['first_name'];
		// $object->lastname  = $record['last_name'];

		foreach ($record as $attribute => $value) {
			if ($object->has_attribute($attribute)) {
				$object->$attribute = $value;
			}
		}
		return $object;
	}

	private function has_attribute($attribute) {
		$object_vars = $this->attributes();
		return array_key_exists($attribute, $object_vars);
	}

	protected function attributes() {
		$attributes = array();
		foreach(self::$db_fields as $field) {
	    if(property_exists($this, $field)) {
	      $attributes[$field] = $this->$field;
	    }
	  }
	  return $attributes;
	}

	protected function sanitized_attributes() {
		global $database;
		$clean_attributes = array();
		foreach ($this->attributes() as $key => $value) {
			$clean_attributes[$key] = $database->escape_value($value);
		}
		return $clean_attributes;
	}

	public function save() {
		return isset($this->id) ? $this->update() : $this->create();
	}

	public function create() {
		global $database;
		$attributes = $this->sanitized_attributes();
		$sql  = "INSERT INTO ".self::$table_name." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";

		if ($database->query($sql)) {
			$this->id = $database->insert_id();
			return true;
		} else {
			return false;
		}
	}

	public function update() {
		global $database;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach ($attributes as $key => $value) {
			$attribute_pairs[] = "{$key} = '{$value}'";
		}
		$sql  = "UPDATE ".self::$table_name." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE id = ".$database->escape_value($this->id);
		$database->query($sql);
		return ($database->affected_rows() == 1) ? true : false;
	}

	public function delete() {
		global $database;
		$sql  = "DELETE FROM ".self::$table_name;
		$sql .= " WHERE id = ".$database->escape_value($this->id);
		$sql .= " LIMIT 1";
		$database->query($sql);
		return ($database->affected_rows() == 1) ? true : false;	
	}
}

?>