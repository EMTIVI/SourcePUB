<?php

/**
 * Project name: SourcePUB Engine 
 * Version of the script 1.0
 * Author Moroz Taras ( -=MTV=- )
 */
 
 namespace SourcePUB\Classes;
 use functions as fnc;
 
 $cases = fnc\filterUrl( $_GET['c'] );
 
 switch( $cases ) {
 	default:
 	
 		if( isset( $_POST[':submit'] ) ) {
			$filters = array(
				'email' => fnc\filterStr($_POST['email'])
			);
			if( empty( $filters['email'] ) ) {
				Session::set( 'error', 'Введите Ваш E-mail адрес.' );
			} else if( !filter_var( $filters['email'], FILTER_VALIDATE_EMAIL ) == true ) {
				Session::set( 'error', 'Не верный формат E-mail адреса.' );
			}
		}
 	
 		Template::set(
 			array(
 				'title' => 'Главная страница',
 				'error' => Session::get('error')
 			)
 		);

 		Template::render('signup');
 		break;
 }