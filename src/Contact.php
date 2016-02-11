<?php
class Contact
{
    private $name;
    private $phone;
    private $address;

    function __construct($contact_name, $contact_phone, $contact_address)
    {
        $this->name = $contact_name;
        $this->phone = $contact_phone;
        $this->address = $contact_address;
    }

    // Getters Setters
    function getName()
    {
        return $this->name;
    }

    function setName()
    {
        $this->name = (string) $new_name;
    }

    function getPhone()
    {
        return $this->name;
    }

    function setPhone()
    {
        $this->phone = (string) $new_phone;
    }

    function getAddress()
    {
        return $this->name;
    }

    function setAddress()
    {
        $this->address = (string) $new_address;
    }

    // Save, getALl, deleteAll
    function save()
    {
        array_push($_SESSION['list_of_contacts'], this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }




}



?>
