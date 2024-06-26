<?php

declare(strict_types=1);

namespace src\Animal;

class Dog implements AnimalInterface
{

    function eat(): void
    {
       echo "dog eats meat<br>";
    }

    function sleep(): void
    {
        echo "dog sleeps<br>";
    }

    function voice(): void
    {
        echo "dog bark<br>";
    }
}