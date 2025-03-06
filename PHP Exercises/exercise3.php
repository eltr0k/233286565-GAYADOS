<?php
echo "FizzBuzz:\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz\n";
    }
    elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

echo "\n"; 

echo "Even numbers in the first 10 numbers of the Fibonacci sequence:\n";
$first = 0;
$second = 1;
$count = 0;
$evenCount = 0;

while ($count < 10) {
    $next = $first + $second;

    $count++;

    if ($next % 2 == 0) {
        echo $next . "\n";
    }

    $first = $second;
    $second = $next;
}
?>
