<?php

trait CaptainAmerica
{

    public function CA()
    {
        $CaptainA = "Steve Rogers";

        switch ($CaptainA) {
            case "Tony Stark":
                echo "He is Captain of Marvel Studio";
                break;

            case "Steve Rogers":
                echo "$CaptainA is Captain of Marvel Studio";
                break;

            default:
                echo "Undefiend Value";
                break;
        }
    }
}


?>