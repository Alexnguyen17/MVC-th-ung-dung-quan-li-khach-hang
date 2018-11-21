<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 21/11/2018
 * Time: 16:22
 */
namespace Model;

class Customer
{
    public $id;
    public $name;
    public $email;
    public $address;

    public function __construct($name, $email, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
}