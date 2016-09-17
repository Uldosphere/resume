<?php

	namespace Presenters;
	
	/**
	 * General Presenter Class which contains the general transfer information.
	 */
	class General extends BaseDTO
	{
		/* CONSTRUCTOR */
		
		public function __construct($poGeneral)
		{
			$this->extend($poGeneral);	
		}
	}