@for ($i = 1; $i <= 100; $i++)
    @if ($i % 15 == 0)
        FizzBuzz
    @elseif ($i % 3 == 0)
        Fizz
    @elseif ($i % 5 == 0)
        Buzz
    @else
        {{ $i }}
    @endif
    <br>
@endfor
