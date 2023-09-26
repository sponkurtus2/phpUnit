<?php

namespace Testing\php;

use PHPUnit\Framework\TestCase;
require_once 'User.php';

final class UserTest extends TestCase {

    public $user;
    

    protected function setUp(): void {
        $this->user = new User(18, 'John', ["One piece"]);
    }

    public function testName() {
        $this->assertSame('John', $this->user->name, "Nombre incorrecto");
    }

    public function testAge() {
        $this->assertSame(18, $this->user->age, "Edad incorrecta");
    }

    public function testMovies() {
        $this->assertEmpty($this->user->favorite_movies, "Peliculas vacias");
    }

}