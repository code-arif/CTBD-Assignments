<center id="test" >
    <?php
    function pyramid($hm)
    {
        for ($i = 1; $i <= $hm; $i++) {

            for ($j = 1; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br/>';
        }
    }
    pyramid(1000);
    ?>
</center>