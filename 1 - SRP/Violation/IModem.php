<?php
namespace Solid\Srp\Violation;

interface IModem
{
	public function discar(int $numero);
	public function desligar();
	public function enviar(string $mensagem);
	public function receber() : string;
}
?>