<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 21:09
 */
use EcosystemObject\EcosystemObjectInterface;

/**
 * Наблюдатель
 *
 * Class Observer
 */
class Observer
{
	/**
	 * Идентификатор наблюдателя
	 *
	 * @var int
	 */
	private $id;

	public function __construct()
	{
		$this->id ++;
	}

	/**
	 * Описывает объект
	 *
	 * @param EcosystemObjectInterface $ecosystemObject
	 */
	public function describeObject(EcosystemObjectInterface $ecosystemObject)
	{
		$currentDateTime = new DateTime();

		print_r($this->id);
		$ecosystemObject->getParameters();
		print_r($currentDateTime->format('d.m.Y H:i:s'));
	}
}