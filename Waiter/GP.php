<?php

namespace Waiter;

use Waiter\SoupWaiter;

/**
 * Created by PhpStorm.
 * User: francisw
 * Date: 17/09/2017
 * Time: 13:30
 *
 * I would like to use class constants here but that creates a PHP 7.1 dependency
 */
class GP extends SocialNotImplemented {
	protected function get_name() { return "google+"; }
	protected function get_fa_name(){
		return "fa-google-plus-square";
	}
}
