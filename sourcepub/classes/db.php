<?php

/**
 * Project name: SourcePUB Engine 
 * Version of the script 1.0
 * Author Moroz Taras ( -=MTV=- )
 */
 
 namespace SourcePUB\Classes;
 use Functions as fnc;
 
 Class DB {
 	
 	protected static $getInstance;
 	
	
	public static function run() {
		if( !isset( self::$getInstance ) ) {
			try {
				self::$getInstance = new \PDO('mysql:dbname=mysql;host=localhost', 'mysql', 'mysql');
			} catch( PDOException $error ) {
				exit( $error->getMessage() );
			}
		}
		return self::$getInstance;
	}
	
	final public function __destruct() {
		self::$getInstance = null;
	}
 	
 }
 