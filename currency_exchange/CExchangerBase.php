<?php

/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 23.12.2015
 * Time: 0:14
 */

require_once "IExchanger.php";

class CExchangerBase implements IExchanger
{
    public $result;
    public $startValue;
    public $courseValue;
    public $currencyName;

    /**
     * CExchangerBase constructor.
     * @param $courseValue
     * @param $currencyName
     */
    public function __construct($courseValue, $currencyName)
    {
        $this->courseValue = $courseValue;
        $this->currencyName = $currencyName;
    }


    function calculate($startValue)
    {
        $this->result = $this->courseValue * $startValue;
    }

    public function printResult()
    {
        return $this->startValue . " " . $this->currencyName . " составляет " . $this->result . " гривен";
    }


}