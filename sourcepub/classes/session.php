<?php

/**
 * Project name: SourcePUB Engine 
 * Version of the script 1.0
 * Author Moroz Taras ( -=MTV=- )
 */
 
 namespace SourcePUB\Classes;
 use Functions as fnc;
 
 Class Session {
 	
 	public static function set( $key, $value ) {
		return $_SESSION[$key] = $value;
	}
	
	public static function get( $key ) {
		if( isset($_SESSION[$key]) ) {
			return $_SESSION[$key];
		}
	}
		
 }