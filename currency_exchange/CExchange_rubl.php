<?php

/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 21.12.2015
 * Time: 21:51
 */
require_once 'CExchangerBase.php';

class CExchange_rubl extends CExchangerBase
{
    public $rubl = 0.33;

    /**
     * CExchange_rubl constructor.
     */
    public function __construct()
    {
        parent::__construct($this->rubl, "рублей");
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