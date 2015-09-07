<?php

/**
 * Project name: SourcePUB Engine 
 * Version of the script 1.0
 * Author Moroz Taras ( -=MTV=- )
 */
 
 namespace SourcePUB\Classes;
 use Functions as fnc;
 
 Class Template {
 	
 	protected static $vars = array();
 	
 	private static $template;
 	
 	public static function set( $key, $value = null ) {
		if( is_array( $key ) || is_object( $key ) ) {
			foreach( $key as $k => $v ) {
				self::$vars[$k] = $v;
			}
		} else {
			self::$vars[$key] = $value;
		}
	}
	
	public static function render($nameOfView, $data = null) {
		self::$template = self::getPath($nameOfView);
		if( ! is_readable( self::$template ) ) {
			exit( fnc\getMessage( 'Tpl file does not exist: ' . $nameOfView ) );
		} else {
			if( is_array( $data ) ) {
				self::$vars = array_merge( self::$vars, $data );
			}
			extract( self::$vars, EXTR_PREFIX_ALL, 'tpl' );
			
			include( self::getPath( 'header' ) );
			include( self::$template );
			include( self::getPath( 'footer' ) );
		}
	}
	
	private static function getPath($file) {
		$pathToTpl = $_SERVER['DOCUMENT_ROOT'] . '/sourcepub/tpl_files/' . $file . '.tpl';
		if( substr( $pathToTpl, -4 ) == '.tpl' ) {
			return $pathToTpl;
		} else {
			exit( fnc\getMessage( 'File is not tpl.' ) );
		}
	}
 	
 }