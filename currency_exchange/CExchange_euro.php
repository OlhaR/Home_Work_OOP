<?php

/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 21.12.2015
 * Time: 21:51
 */
require_once 'CExchangerBase.php';

class CExchange_euro extends CExchangerBase
{
    public $euro = 25.56;

    /**
     * CExchange_euro constructor.
     */
    public function __construct()
    {
        parent::__construct($this->euro, "евро");
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