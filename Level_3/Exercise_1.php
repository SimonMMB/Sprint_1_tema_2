<?php
//FUNCTION
function determinePrimeNumbers(int $number) : string {
    $primeNumbers = [];
    //List of total numbers between 2 and $number (both included)
    for ($i = 2; $i <= $number; $i++) {
        $primeNumbers[] = $i;
    }
    //Deleting non-prime numbers from list
    for ($i = 2; $i <= sqrt($number); $i++) {
        for ($j = $i; $j <= ($number/$i); $j++) {
            $noPrime = $i * $j;
            $key = array_search($noPrime, $primeNumbers);
            if ($key != false) {
                unset($primeNumbers[$key]);
            }
        }
    }
    //Output message 
    $message = 'Prime numbers <= ' . $number . ': ' . implode(', ', $primeNumbers) . PHP_EOL;
    return $message;
}
//EXAMPLES
echo (determinePrimeNumbers(20));
echo (determinePrimeNumbers(50));
echo (determinePrimeNumbers(100));
?>