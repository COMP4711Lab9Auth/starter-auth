<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 2016-03-23
 * Time: 10:41 AM
 */

class Users extends MY_Model {
    public function __construct() {
        parent::__construct('users', 'id');
    }
}