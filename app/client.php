<?php
require dirname( __DIR__ ) . '/vendor/autoload.php';

use Patterns\Behavioral\Strategy\CarStrategy;
use Patterns\Behavioral\Strategy\Context;
use Patterns\Behavioral\Strategy\WalkStrategy;



$sample_data = [ 1, 2, 3, 4, 5 ];


$strategy_by_car = new CarStrategy();
$context     = new Context( $strategy_by_car );
$context->doBusinessLogic( $sample_data );


$strategy_by_walk = new WalkStrategy();
$context->setStrategy( $strategy_by_walk );
$context->doBusinessLogic( $sample_data );

