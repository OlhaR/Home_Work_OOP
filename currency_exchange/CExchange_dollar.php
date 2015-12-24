<?php

/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 21.12.2015
 * Time: 21:51
 */
require_once 'CExchangerBase.php';

class CExchange_dollar extends CExchangerBase
{
    public $dollar = 23.52;

    /**
     * CExchange_dollar constructor.
     */
    public function __construct()
    {
        parent::__construct($this->dollar, "долларов");
    }


    public function printResult()
    {
        echo parent::printResult();
    }

    public function calculate($startValue)
    {
        parent::calculate($startValue);
    }
}