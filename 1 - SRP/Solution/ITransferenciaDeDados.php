<?php
namespace Solid\Srp\Solution;

interface ITransferenciaDeDados{
	public function enviar(string $mensagem);
	public function receber() : string;
}
?>