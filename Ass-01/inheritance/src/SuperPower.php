<?php 

//////all class include
include "IronMan.php";
include "Thor.php";
include "CaptainAmerica.php";
include "Hulk.php";


class SuperPower extends IronMan
{


    /////trait classes
    use Thor;
    use CaptainAmerica;
    use Hulk;


    public function Flying(){
        echo "Flying is the ability to propel oneself through the air, through one's own natural or supernatural power.";
    }

    public function Invisibility(){
        echo "Able to disappear without a trace.";
    }

    public function LaserEye (){
        echo "The users of this power can fire off lasers from their eyes which can cause damage on their intended targets.";
    }
}


?>