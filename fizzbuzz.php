<?php
/* FizzBuzz

Write a PHP script that prints all integer values from 1 to 100.

For multiples of three output "Fizz" instead of the value and for the multiples of five output "Buzz".

Values which are multiples of both three and five should output as "FizzBuzz".
*/

for ($i = 1; $i <= 100; $i++){
    $j = (!($i % 3) ? 'Fizz' : '') . (!($i % 5) ? 'Buzz':'');  
    echo ($j ? $j:$i)."\n";
}
?>