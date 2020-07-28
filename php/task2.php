<?php
class BankBill
{
	private $valueWithVat;
	private $vat = 0.2; //20% ндс

	public function __construct(int $valueWithVat) {
		$this->valueWithVat = $valueWithVat;
	}

	function getValueNoVat()
	{
	    return $this->valueWithVat / (1 + $this->vat);
	}
}

$a = new BankBill(1000);
echo $a->getValueNoVat();
