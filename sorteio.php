<?php

$participants = ['Ricardo', 'Jessica', 'Andre', 'Janaina', 'Raphael', 'Rose', 'Camila', 'Isabel', 'Matheus', 'Ana'];

$amt_participants = count($participants)-1;

echo $amt_participants. " participants. <br/>";

$result = rand(1, $amt_participants);

echo "The result is " .$result.". The winner was " .$participants[$result]. ".";