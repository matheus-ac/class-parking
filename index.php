<?php
/**
 * Created by PhpStorm.
 * User: matheus-ac
 * Date: 25/06/2019
 * Time: 00:42
 */

require_once("Parking.php");

$parking = new Parking(10,20);
/**
 * Exemplo 1 CheckIn/CheckOut e valor apagar
 */
echo PHP_EOL.'---------- EX: 1 ----------';
$parking->CheckIn('uzp221', '11:45:23');
$parking->CheckOut('uzp221', '18:34:54');

echo PHP_EOL.' - Preço por hora: '.$parking->getPrice();
echo PHP_EOL.' - Vagas disponivel: '.$parking->getAllVacancies();
echo PHP_EOL.' - o veiculo de placa ' . $parking->getPlateVehicle() .
    ' fez o CheckOut, o valor a pagar é de: '. $parking->getpriceTotal() .
    ' por ' .$parking->getHourTotal() .' horas de uso';

/**
 * Exemplo 2 CheckIn e contar vagas disponivel
 */
echo PHP_EOL.'---------- EX: 2 ----------';

$parking->CheckIn('azp231', '10:45:23');
$parking->CheckIn('bzp212', '11:45:23');
$parking->CheckIn('czp203', '12:45:23');

echo PHP_EOL.' - Preço por hora: '.$parking->getPrice();
echo PHP_EOL.' - Vagas disponivel: '.$parking->getAllVacancies();

/**
 * Exemplo 3 Lista todos os veiculos no estacionamento
 */
echo PHP_EOL.'---------- EX: 3 ----------';
foreach ($parking->getVehicles() as $value) {
    echo PHP_EOL.' - Veiculo de placa '. $value['plateVehicle'].' Fez CheckIn as '.$value['hourIn'];
}