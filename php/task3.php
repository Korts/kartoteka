<?php
$xmlstring = file_get_contents ('test.xml');
$xml = simplexml_load_string($xmlstring);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
$person = $array['BankruptInfo']["BankruptPerson"]["@attributes"];
$lots = $array["MessageInfo"]["Auction"]["LotTable"]["AuctionLot"];

echo $person["Id"].' '.$person["InsolventCategoryName"].' '.$person["FirstName"].'<br />';

foreach ($lots as $lot) {
	$summ = (float)$lot["StartPrice"] + (float)$lot["Advance"] * (float)$lot["Step"];
	echo 'Номер: '.$lot["Order"].' Стоимость: '.$summ.' Описание: '.$lot["Description"].'<br />';
}
