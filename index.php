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
        }
        display();

        $game = new Game($squares);

        if ($game->winner('x')) {
            echo 'You win. Lucky guesses!';
        } else if ($game->winner('o')) {
            echo 'I win. Muahahahaha';
        } else {
            echo 'No winner yet, but you are losing.';
        }
        ?>
    </body>
</html>
<?php

class Game {

    var $position;

    function _construct($square) {
        $this->position = str_split($square);
    }

    function winner($token) {

        for ($row = 0; $row < 3; $row++) {

            //Horizontal
            if (($this->position[3 * $row] == $token) &&
                    ($this->position[3 * $row + 1] == $token) &&
                    ($this->position[3 * $row + 2] == $token)) {
                $won = true;
            }

            //Vertical
            if (($this->position[$row] == $token) &&
                    ($this->position[$row + 3] == $token) &&
                    ($this->position[$row + 6] == $token)) {
                $won = true;
            }
        }

        //Diagonal
        if (($this->position[0] == $token) &&
                ($this->position[4] == $token) &&
                ($this->position[8] == $token)) {
            $won = true;
        }

        if (($this->position[2] == $token) &&
                ($this->position[4] == $token) &&
                ($this->position[6] == $token)) {
            $won = true;
        }
    }

    function show_cell($which) {
        $token = $this->position[$which];
        //deal with the easy case
        if ($token <> '-') {
            return '<td>' . $token . '</td>';
        }
        //deal with the hard case
        $this->newposition = $this->position; // copy the original
        $this->newposition[$which] = 'o'; // this would be their move
        $move = implode($this->newposition); // make a string from the board array
        $link = '/?board=' . $move; // this is what we want the link to be
        // so return a cell conatining an anchor and showing a hyphen
        return '<td><a href="' . $link . '">-</a></td>';
    }

}

function display() {
    echo '<table cols="3" style="font-size:large; font-weight:bold">';
    echo '<tr>';
    for ($pos = 0; $pos < 9; $pos++) {
        echo $this->show_cell($pos);
        if ($pos % 3 == 2) {
            echo '</tr><tr>';
        }
    }
    echo '</tr>';
    echo '</table>';
}
?>