<?php

include "Electronics.php";
include "Laptop.php";

class Abst extends Electronics implements Laptop
{
    public function getAbst()
    {
        echo "Hello php <br>";
    }



    ///////Abstrace class method
    public function powerSupply()
    {
        print "This is abstract method exaple <br>";
    }

    public function Refrigerator()
    {
        print "Walton Refrigerator <br>";
    }

    public function MircoOven()
    {
        print "Walton MircoOver <br>";
    }

    //////CLOSE Abstract class


    /////Interface class method

    public function motherBoard()
    {
        print "Gigabyte H410M H V3 10th & 11th Gen Motherboard <br>";
    }

    public function DisplayPanel()
    {
        echo "FHD LED <br>";
    }

    public function Brand()
    {
        echo "HP <br>";
    }

    public function StorageType()
    {
        echo "M.2 PCIe NVMe SSD <br>";
    }

    public function Ports()
    {
        echo "HDMI 2 Available";
    }

///// CLOSE Interface class method

}


?>