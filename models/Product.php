<?php

class Product
{
    protected $name;
    protected $yearOfProduction;
    protected $price;
    protected $barcode;
    protected static $count = 0;


    public function __construct(String $_name, Int $_year, float $_price, String $_barcode)
    {
        $this->setName($_name);
        $this->setYearOfProduction($_year);
        $this->setPrice($_price);
        $this->setBarcode($_barcode);
        $this->setCount();
    }

    public function setName($_name)
    {
        if ($_name === '') {
            $_name = 'unknown';
        }
        $this->name = $_name;
    }

    public function setYearOfProduction($_year)
    {
        if (is_nan($_year)) {
            $_year = null;
        }
        $this->yearOfProduction = $_year;
    }

    public function setPrice($_price)
    {
        if (is_nan($_price)) {
            $_price = null;
        }
        $this->price = $_price;
    }

    public function setBarcode($_barcode)
    {
        if ($_barcode === '') {
            $_barcode = 'unknown';
        }
        $this->barcode = $_barcode;
    }

    public static function setCount()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}
