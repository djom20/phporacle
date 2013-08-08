<?php
		/**
	 * undocumented class
	 *
	 * @package default
	 * @author
	 **/

	class Database{
		private $request		=	0;
		private $con 		=	0;
		private $db 		=	'psql';
		private $user 		=	'system';
		private $pass		=	'Lpasteur8*';
		private $sid		=	0;

		function __construct(){
			// ==================================================================
			//
			// This function in Database Class:
			//
			//
			// ------------------------------------------------------------------
			$this->connect();
		}

		function connect(){
			// ==================================================================
			//
			// This function in Database Class:
			//
			//
			// ------------------------------------------------------------------
			$this->con = oci_connect($this->user, $this->pass, $this->sid);
		}

		function disconnect(){
			// ==================================================================
			//
			// This function in Database Class:
			//
			//
			// ------------------------------------------------------------------

		}

		function ddl($sql){
			// ==================================================================
			//
			// This function in Database Class:
			//
			//
			// ------------------------------------------------------------------
			if($sql != ''){
				if($this->con != null){
					$this->request = oci_parse($this->con, $sql);
					oci_execute($this->request);
				}
			}
		}

		function dml(argument){
			// ==================================================================
			//
			// This function in Database Class:
			//
			//
			// ------------------------------------------------------------------

		}

		function commit(argument){
			// ==================================================================
			//
			// This function in Database Class:
			//
			//
			// ------------------------------------------------------------------

		}
	}
?>