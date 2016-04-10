<?php
namespace Solid\Srp\Solution;

class Modem implements ITransferenciaDeDados, ITransferenciaDeVoz{
	public function discar(int $numero){
		// Seu código aqui...
	};
	public function desligar(){
		// Seu código aqui...
	};
	public function enviar(string $mensagem){
		// Seu código aqui...
	};
	public function receber() : string {
		// Seu código aqui...
	};
}