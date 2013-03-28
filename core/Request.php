<?php
	
	class Request{

  
		public $url; //url appellé par luser
		public $page=1;
		
		function __construct()
		{
			$this-> url = $_SERVER['PATH_INFO'];
			if(isset($_GET['page'])){
				if(is_numeric($_GET['page'])){
					if ($_GET['page']>0){
						$this->page= $_GET['page'];
					}				
				}
			}
		}
	}
	