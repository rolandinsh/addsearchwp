<?php

/*
  Plugin Name: AddSearch for WordPress
  Plugin URI: http://simplemediacode.com/?s=addsearchwp
  Description: AddSearch is an instant site search engine for your WordPress based website. 
  Author: Rolands Umbrovskis
  Author URI: http://umbrovskis.com/
  Version: 0.0.1
  License: GPLv2 or later (LICENSE)
  Requires at least: 3.3
  Tested up to: 3.7.1

  Copyright (C) 2013, Rolands Umbrovskis - rolands@simplemediacode.com
 */

 	define('SMCASWPV','0.0.1'); // location general @since 0.0.1
	define('SMCASWPM',dirname(__FILE__)); // location general @since 0.0.1
	define('SMCASWPF','addsearchwp'); // location folder @since 0.0.1
	define('SMCASWPURL', plugin_dir_url(__FILE__)); // Plugin URI @since 0.0.1

	new addSearchWP;
	class addSearchWP{
		public function __construct(){}
	}