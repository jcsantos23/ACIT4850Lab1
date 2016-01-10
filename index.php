<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here

        echo "Hello World!!";
        echo "<br />";

        if (!isset($_GET['board'])) {
            $position = "---------";
            echo 'No board parameter yet.';
            echo '<br />';
        } else {
            $position = $_GET['board'];
        }

        $squares = str_split($position);

        if (winner('x', $squares)) {
            echo 'You win.';
        } else if (winner('o', $squares)) {
            echo 'I win.';
        } else {
            echo 'No winner yet.';
        }
        ?>
    </body>
</html>
<?php

function winner($token, $position) {

    for ($row = 0; $row < 3; $row++) {

        //Horizontal
        if (($position[3 * $row] == $token) &&
                ($position[3 * $row + 1] == $token) &&
                ($position[3 * $row + 2] == $token)) {
            $won = true;
        }

        //Vertical
        if (($position[$row] == $token) &&
                ($position[$row + 3] == $token) &&
                ($position[$row + 6] == $token)) {
            $won = true;
        }
    }

    //Diagonal
    if (($position[0] == $token) &&
            ($position[4] == $token) &&
            ($position[8] == $token)) {
        $won = true;
    }
    
    if (($position[2] == $token) &&
            ($position[4] == $token) &&
            ($position[6] == $token)) {
        $won = true;
    }

    return $won;
}
?>