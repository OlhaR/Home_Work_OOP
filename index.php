<?php
/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 15.12.2015
 * Time: 21:26
 */

require 'CCars.php';

$speed = new CCars("Audi", 200, "sedan", 4);
$speed-> calculation(10,2);
$speed-> print_res();


echo "Изменим свойства автомобиля: "."<br>"."<br>";

$speed->set_body_type("cabriolet");
$speed->set_car_model("BMW");
$speed->set_max_speed(320);
$speed->set_wheels(8);
$speed->calculation(500, 2);
$speed->print_res();
