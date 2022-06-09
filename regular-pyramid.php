<?php
    /*
    --------- Sample Output -------------
                *
               ***
              *****
              *******
    --------- ++++++++++++ -------------
    */
	$rows = 5;
	for($i = 0, $k = $rows; $i <= $rows; $i++,$k--)
    {
    	
    	for($j = 1; $j <= ($i*2)-1; $j++)
        {
        	echo "*";
        }
        echo "<br>";
        for($x = 1; $x < $k; $x++)
        {
        	echo "&nbsp;&nbsp";
        }
        
    }
?>