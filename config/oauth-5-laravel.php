<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session',

	/**
	 * Consumers
	 */
	'consumers' => [

			// using SUST CSE Batch 2012  facebook app 
		'Facebook' => [
			'client_id'     => '1587962404848426', 			
			'client_secret' => 'a10a6b95067464e4e4cf262b54126955',
			'scope'         => array('email'),
		],


		'Google' => array(
			'client_id'     => '204699774975-sgsbvg8plfpj4hbtb88u624dsd0f2ubf.apps.googleusercontent.com',
			'client_secret' => 'ateAnhGDlDS5I3fd6OT1VLDP',
			'scope'         => array('userinfo_email','userinfo_profile'),
		),

	]

];