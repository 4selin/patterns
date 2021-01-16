<?php


namespace Patterns\Behavioral\Strategy;


/**
 * Контекст определяет интерфейс, представляющий интерес для клиентов.
 */
class Context {

	/**
	 * Обычно Контекст принимает стратегию через конструктор, а также
	 * предоставляет сеттер для её изменения во время выполнения.
	 *
	 * @param Strategy $strategy
	 */
	public function __construct(
		private Strategy $strategy
	) {
	}

	/**
	 * Обычно Контекст позволяет заменить объект Стратегии во время выполнения.
	 *
	 * @param Strategy $strategy
	 */
	public function setStrategy( Strategy $strategy ): void {
		$this->strategy = $strategy;
	}

	/**
	 * Вместо того, чтобы самостоятельно реализовывать множественные версии
	 * алгоритма, Контекст делегирует некоторую работу объекту Стратегии.
	 *
	 * @param array $data
	 */
	public function doBusinessLogic( array $data ): void {
		$this->strategy->execute( $data );
	}

}