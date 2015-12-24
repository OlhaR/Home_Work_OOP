<?php

/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 15.12.2015
 * Time: 21:26
 */
class CCars
{
    private $car_model;
    private $max_speed;
    private $body_type;
    private $wheels;

    private $speed_hour;
    private $speed_second;

    public function __construct($car_model, $max_speed, $body_type, $wheels)
    {
        $this->car_model = $car_model;
        $this->max_speed = $max_speed;
        $this->body_type = $body_type;
        $this->wheels = $wheels;
    }

    public function get_car_model()
    {
        return $this->car_model;
    }

    public function get_max_speed()
    {
        return $this->max_speed;
    }

    public function get_body_type()
    {
        return $this->body_type;
    }

    public function get_wheels()
    {
        return $this->wheels;
    }

    public function set_car_model($car_model)
    {
        $this->car_model = $car_model;
    }

    public function set_max_speed($max_speed)
    {
        $this->max_speed = $max_speed;
    }

    public function set_body_type($body_type)
    {
        $this->body_type = $body_type;
    }

    public function set_wheels($wheels)
    {
        $this->wheels = $wheels;
    }

    public function calculation($distance, $time)
    {
        $this->speed_hour = $speed_hour = $distance / $time;
        $this->speed_second = $speed_second = $distance / $time * 1000 / 3600;
    }

    public function print_res()
    {
        echo "������ ���������� " . $this->car_model . "<br>";
        echo "������������ �������� " . $this->max_speed . "<br>";
        echo "��� ������ " . $this->max_speed . "<br>";
        echo "���������� ����� " . $this->wheels . "<br>";
        echo "�������� ���������� ���������� " . $this->speed_hour ." ��/� ". "<br>";
        echo "�������� ���������� ���������� " . $this->speed_second ." �/� "."<br>"."<br>";
    }
}