<?php

include_once("dns__lib.php");

class dns__djbdns extends dns__
{
	function __construct()
	{
		parent::__construct();
	}

	static function uninstallMe()
	{
		parent::uninstallMeTrue('djbdns');
	}

	static function installMe()
	{
		parent::installMeTrue('djbdns');
	}
}