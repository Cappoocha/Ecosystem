<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 20:58
 */

namespace EcosystemObject;

/**
 * Растения
 *
 * Class Plant
 */
class Plant implements EcosystemObjectInterface
{
	const PLANT_TYPE = 'Plant';

	/**
	 * Счетчик растений в системе
	 *
	 * @var int
	 */
	private static $plantIterator = 0;

	/**
	 * Идентификатор растения в системе
	 *
	 * @var int
	 */
	private $id = 0;

	/**
	 * Название растения
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @param $name
	 */
	public function __construct($name)
	{
		$this->name = $name;
		$this->id = self::$plantIterator;

		self::$plantIterator++;
	}

	/**
	 * Возвращает индетификатор растения
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->getId();
	}

	/**
	 * @return void
	 */
	public function getParameters()
	{
		print_r('Type: ' . self::PLANT_TYPE . 'Name: ' . $this->name);
	}
}