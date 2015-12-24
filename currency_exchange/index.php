<?php
/**
 * Created by PhpStorm.
 * User: Olya
 * Date: 21.12.2015
 * Time: 22:07
 */

require_once 'CExchange_dollar.php';
require_once 'CExchange_euro.php';
require_once 'CExchange_rubl.php';

echo "Курс доллара на 22.12 = 23.52" . "<br>";
echo "Курс евро на 22.12 = 25.56" . "<br>";
echo "Курс рубля на 22.12 = 0.33" . "<br>";

?>
<form method="post">
    <p>Выберите валюту</p>
    <select name="currency" title="выбор валюты">
        <option value='USD'> USD</option>
        <option value='EUR'> EUR</option>
        <option value='RUB'> RUB</option>
    </select>

    <p>Введите сумму</p>

    <p><input title="сумма" type="text" name="sum" value='<?= $_REQUEST['sum'] ?>'></p>

    <p><input type="submit" name="count" value="Рассчитать"></p>
</form>

<p>
    <?php

    $sum = $_REQUEST['sum'];
    $currency = $_REQUEST['currency'];

    if ($sum != "" && $currency != "") {

        switch ($currency) {
            case 'USD':
                $us = new CExchange_dollar();
                $us->calculate($sum);
                $us->printResult();
                break;
            case 'EUR':
                $eu = new CExchange_euro();
                $eu->calculate($sum);
                $eu->printResult();
                break;
            case 'RUB':
                $ru = new CExchange_rubl();
                $ru->calculate($sum);
                $ru->printResult();
                break;
            default:
                echo "неверная валюта";
        }
    };
    ?>
</p>

