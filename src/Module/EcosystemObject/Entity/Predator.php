<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 20:57
 */
namespace Module\EcosystemObject\Entity;

/**
 * Хищник
 *
 * Class Predator
 */
class Predator extends Animal
{
	const MIN_STRENGTH = 100;
	const MAX_STRENGTH = 200;
	const PREDATOR_TYPE = 'Predator';

	/**
	 * Возвращает минимальное число для установления силы
	 *
	 * @return int
	 */
	public function getMinStrength()
	{
		return self::MIN_STRENGTH;
	}

	/**
	 * Возвращает максимальное число для установления силы
	 *
	 * @return int
	 */
	public function getMaxStrength()
	{
		return self::MAX_STRENGTH;
	}

	/**
	 * Возвращает тип животного
	 *
	 * @return string
	 */
	public function getType()
	{
		return self::PREDATOR_TYPE;
	}
}