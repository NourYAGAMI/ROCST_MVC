<?php

class Conf{

	static public $databases = array(

 	'default' =>  array(
	
	'host' =>'localhost',
 	'dbname' =>'tutos',
 	'login' =>'root',
 	'password' =>''));
 }

 	Router::connect('posts/:slug-:id','posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)');



/* 	define("DB_HOST","localhost");
	define("DB_LOGIN","root");
	define("DB_PASS","");
	define("DB_BASE","tutos");
	DB_HOST,DB_LOGIN,DB_PASS,DB_BASE;*/
?>

