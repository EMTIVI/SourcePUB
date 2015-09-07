<?php

/**
 * Project name: SourcePUB Engine 
 * Version of the script 1.0
 * Author Moroz Taras ( -=MTV=- )
 */
 
 namespace Functions;
 
 function filterUrl( $string ) {
 	if( is_string( $string ) ) {
		$return = trim( filter_var( $string, FILTER_SANITIZE_URL ) );
		return strip_tags( $return );
	}
 }
 
 function getMessage( $message ) {
 	if( !empty( $message ) ) {
		return $message;
	}
 }
 
 function filterSTR( $string ) {
 	if( is_string( $string ) ) {
		$string = trim( filter_var( $string, FILTER_SANITIZE_FULL_SPECIAL_CHARS ) );
		return stripcslashes( $string );
	}
 }
 