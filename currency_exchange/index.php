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

echo "���� ������� �� 22.12 = 23.52" . "<br>";
echo "���� ���� �� 22.12 = 25.56" . "<br>";
echo "���� ����� �� 22.12 = 0.33" . "<br>";

?>
<form method="post">
    <p>�������� ������</p>
    <select name="currency" title="����� ������">
        <option value='USD'> USD</option>
        <option value='EUR'> EUR</option>
        <option value='RUB'> RUB</option>
    </select>

    <p>������� �����</p>

    <p><input title="�����" type="text" name="sum" value='<?= $_REQUEST['sum'] ?>'></p>

    <p><input type="submit" name="count" value="����������"></p>
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
                echo "�������� ������";
        }
    };
    ?>
</p>

