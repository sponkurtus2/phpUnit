<?php

namespace Testing\php;


class User {

    public int $age;
    public array $favorite_movies = [];
    public string $name;


    public function __construct(int $age, string $name, array $favorite_movies)
    {
        $this->age = $age;
        $this->name = $name;
        $this->favorite_movies = $favorite_movies;
    }

}

?>