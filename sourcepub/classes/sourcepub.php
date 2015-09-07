<?php

/**
 * Project name: SourcePUB Engine 
 * Version of the script 1.0
 * Author Moroz Taras ( -=MTV=- )
 */
 
 namespace SourcePUB\Classes;
 use Functions as fnc;
 
 Class SourcePUB {
 	
 	public static function init() {
 		$modules = fnc\filterUrl( $_GET['m'] );
 		if( isset( $modules ) ) {
		 	if( empty( $modules ) ) {
				exit( fnc\getMessage( 'Empty module name.' ) );
			} else {
				$pathToModules = $_SERVER['DOCUMENT_ROOT'] . '/sourcepub/modules/' . strtolower( $modules ) . '.php';
				if( substr( $pathToModules , - 4 ) == '.php' ) {
					if( is_readable( $pathToModules ) ) {
						include( $pathToModules );
					} else {
						exit( fnc\getMessage( 'Requested module does not exist.' ) );
					}
				} else {
					exit( fnc\getMessage( 'File is not php.' ) );
				}
			}
		} else {
			include( $_SERVER['DOCUMENT_ROOT'] . '/sourcepub/modules/welcome.php' );
		}
	}
 	
 } 