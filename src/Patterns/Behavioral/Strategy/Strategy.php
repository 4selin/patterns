<?php


namespace Patterns\Behavioral\Strategy;


interface Strategy {
	public function execute( array $data ) : void;
}