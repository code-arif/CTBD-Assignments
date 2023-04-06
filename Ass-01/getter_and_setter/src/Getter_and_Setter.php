<?php

////Getter and Setter
class Getter_and_Setter //temporary class name
{

    ////class property decleration
    private $Key = "5465d4fkjfkjsd5445";


    ////class method decleration
    public function getKey() //Getter info

    {
        echo "My key is: ". $this->Key;
        echo "<br>";
    }

    public function setKey($NewKey) //Setter info
    {
        $this->Key = $NewKey;
        echo "New Key is: ". $this->Key;
    }
}

?>