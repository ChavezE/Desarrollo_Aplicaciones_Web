<?php
	class Database {
	    private static $db;
	    private $connection;

		// Credential
		private $host = "localhost";
		private $db_name = "proyectofinal";
		private $user = "admin";
		private $pwd = "admin";

	    private function __construct() {
        try{
          $this->connection = new PDO(
                    'mysql:host=' . $this->host . ';dbname=' . $this->db_name,
                    $this->user,
                    $this->pwd);

	        $this->connection->query('SET NAMES utf8');
          $this->connection->query('SET CHARACTER_SET utf8_unicode_ci');

        }catch(PDOException $e){
           echo 'DB connection error: ' . $e->getMessage();
        }

	    }

	    function __destruct() {
	        $this->connection = null;
	    }

	    public static function getConnection() {
	        if (self::$db == null) {
	            self::$db = new Database();
	        }
	        return self::$db->connection;
	    }
	}
?>
