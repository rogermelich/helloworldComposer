<?php
require __DIR__ . "/vendor/autoload.php";
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 6/10/15
 * Time: 19:31
 */
class hello
{
    /**
     * hello constructor.
     */
    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }


    public function sayHello()
    {
        echo "Hola " . $this->faker->name . "!\n";
 }
}