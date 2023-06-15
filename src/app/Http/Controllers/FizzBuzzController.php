<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fizzbuzzcontroller extends Controller
{
    public function fizzBuzz($n)
    {
        $result = [];

        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $result[] = "FizzBuzz";
            } elseif ($i % 3 == 0) {
                $result[] = "Fizz";
            } elseif ($i % 5 == 0) {
                $result[] = "Buzz";
            } else {
                $result[] = $i;
            }
        }

        return response()->json($result);
    }
}
