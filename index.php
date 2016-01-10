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

        $position = $_GET['board'];
        $squares = str_split($position);

        $theywon = false;

        //Horizontal: opponent
        if (($squares[0] == 'x') &&
                ($squares[1] == 'x') && ($squares[2] == 'x')) {
            $theywon = true;
        } else if (($squares[3] == 'x') &&
                ($squares[4] == 'x') && ($squares[5] == 'x')) {
            $theywon = true;
        } else if (($squares[6] == 'x') &&
                ($squares[7] == 'x') && ($squares[8] == 'x')) {
            $theywon = true;
        }
        
        //Vertical: opponent
        if (($squares[0] == 'x') &&
                ($squares[3] == 'x') && ($squares[6] == 'x')) {
            $theywon = true;
        } else if (($squares[1] == 'x') &&
                ($squares[4] == 'x') && ($squares[7] == 'x')) {
            $theywon = true;
        } else if (($squares[2] == 'x') &&
                ($squares[5] == 'x') && ($squares[8] == 'x')) {
            $theywon = true;
        }
        
        //Diagonal: opponent
        if (($squares[0] == 'x') &&
                ($squares[4] == 'x') && ($squares[8] == 'x')) {
            $theywon = true;
        } else if (($squares[2] == 'x') &&
                ($squares[4] == 'x') && ($squares[6] == 'x')) {
            $theywon = true;
        }
        
        $wewon = false;

        //Horizontal: opponent
        if (($squares[0] == 'o') &&
                ($squares[1] == 'o') && ($squares[2] == 'o')) {
            $wewon = true;
        } else if (($squares[3] == 'o') &&
                ($squares[4] == 'o') && ($squares[5] == 'o')) {
            $wewon = true;
        } else if (($squares[6] == 'o') &&
                ($squares[7] == 'o') && ($squares[8] == 'o')) {
            $wewon = true;
        }
        
        //Vertical: opponent
        if (($squares[0] == 'o') &&
                ($squares[3] == 'o') && ($squares[6] == 'o')) {
            $wewon = true;
        } else if (($squares[1] == 'o') &&
                ($squares[4] == 'o') && ($squares[7] == 'o')) {
            $wewon = true;
        } else if (($squares[2] == 'o') &&
                ($squares[5] == 'o') && ($squares[8] == 'o')) {
            $wewon = true;
        }
        
        //Diagonal: opponent
        if (($squares[0] == 'o') &&
                ($squares[4] == 'o') && ($squares[8] == 'o')) {
            $wewon = true;
        } else if (($squares[2] == 'o') &&
                ($squares[4] == 'o') && ($squares[6] == 'o')) {
            $wewon = true;
        }
        ?>
    </body>
</html>