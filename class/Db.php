<?php
class DB
{
	protected $conn;

	public function __construct()
	{
		try{
			$conn = new PDO(sprintf('mysql:host=%s;dbname=%s', hostName, dbname), dbuser, dbpassword);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec('SET NAMES utf8');
            $this->conn = $conn;
		}
		catch(Exception $e){
			echo $e->getMessage();
			exit;
		}
	}

}
