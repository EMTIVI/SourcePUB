<?php

/**
 * Project name: SourcePUB Engine 
 * Version of the script 1.0
 * Author Moroz Taras ( -=MTV=- )
 */
 
 use SourcePUB\Classes\SourcePUB as Engine;
 use Functions as fnc;
 
 include_once( $_SERVER['DOCUMENT_ROOT'] . '/sourcepub/system/functions.php' );
 
 spl_autoload_register(
 	function($nameOfClass) {
		$pathToClasses = $_SERVER['DOCUMENT_ROOT'] . '/' . strtolower($nameOfClass) . '.php';
		if( is_readable( $pathToClasses ) ) {
			include( $pathToClasses );
		} else {
			exit( fnc\getMessage( 'Class does not found.' ) );
		}
	}
 );
 
 Engine::init(); 