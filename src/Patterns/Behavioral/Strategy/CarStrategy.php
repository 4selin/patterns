<?php


namespace Patterns\Behavioral\Strategy;


class CarStrategy implements Strategy {
	public function execute( array $data ): void {
		echo "Прокладывание маршрута на машине... " . array_sum( $data ) * 2, "\n";
	}
}