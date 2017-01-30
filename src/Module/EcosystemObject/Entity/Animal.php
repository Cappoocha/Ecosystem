<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 20:55
 */

namespace Module\EcosystemObject\Entity;

/**
 * Абстрактный класс животных
 *
 * Class Animal
 */
abstract class Animal extends EcosystemObject
{
	/**
	 * Счетчик животных в системе
	 *
	 * @var int
	 */
	private static $animalIterator = 0;

	/**
	 * Идентификатор эивотного в экосисистеме
	 *
	 * @var int
	 */
	private $id;

	/**
	 * Название животного
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * Сила животного
	 *
	 * @var int
	 */
	protected $strength;

	/**
	 * @param string $name
	 * @param null|int $strength
	 */
	public function __construct($name, $strength = null)
	{
		$this->name = $name;

		if ($strength == null) {
			$this->strength = rand($this->getMinStrength(), $this->getMaxStrength());
		} else {
			$this->strength = $strength;
		}

		$this->id = self::$animalIterator;
		self::$animalIterator++;
	}

	/**
	 * Возвращает минимальное число для установления силы
	 *
	 * @return int
	 */
	abstract public function getMinStrength();

	/**
	 * Возвращает максимальное число для установления силы
	 *
	 * @return int
	 */
	abstract public function getMaxStrength();

	/**
	 * Возвращает тип животного
	 *
	 * @return string
	 */
	abstract public function getType();

	/**
	 * Возвращает идентификатор текущего животного
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return void
	 */
	public function getParameters()
	{
		print_r('Type: ' . $this->getType() . 'Name: ' . $this->name . ' Strength: ' . $this->strength);
	}
}