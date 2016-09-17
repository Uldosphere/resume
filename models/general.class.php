<?php

	namespace Models;
	
	use \Libraries\ORM as ORM;
	use \Libraries\Helper as Helper;
	
	/* LOAD DEPENDECIES */
	require_once('presenters/general.class.php');
	
	/**
	 * General Class which contains the general informations.
	 */
	class General extends BaseModel
	{
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			$this->extend(ORM::factory('general'));	
		}

		/* PUBLIC METHODS */
		
		public function get()
		{
			return new \Presenters\General($this);
		}
	}