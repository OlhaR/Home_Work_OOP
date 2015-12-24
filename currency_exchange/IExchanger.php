<?php

/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 24.12.2015
 * Time: 21:41
 */
interface IExchanger
{
    function calculate($startValue);

    function printResult();
}