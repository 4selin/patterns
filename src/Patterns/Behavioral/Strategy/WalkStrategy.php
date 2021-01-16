<?php


namespace Patterns\Behavioral\Strategy;


class WalkStrategy implements Strategy {
	public function execute( array $data ) : void {
		echo "Прокладывание маршрута пешком... " . array_sum($data) ."\n";

	}
}