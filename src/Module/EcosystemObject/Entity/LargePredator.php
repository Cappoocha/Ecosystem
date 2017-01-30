<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 21:13
 */

namespace Module\EcosystemObject\Entity;

/**
 * Крупный хищник
 *
 * Class LargePredator
 */
class LargePredator extends Predator
{
	const MIN_STRENGTH = 200;
	const MAX_STRENGTH = 300;
	const LARGE_PREDATOR_TYPE = 'Large predator';

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
		return self::LARGE_PREDATOR_TYPE;
	}
}