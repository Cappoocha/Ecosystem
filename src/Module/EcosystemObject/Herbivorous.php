<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 20:57
 */
namespace EcosystemObject;

/**
 * Травоядный
 *
 * Class Herbivorous
 */
class Herbivorous extends Animal
{
	const MIN_STRENGTH = 0;
	const MAX_STRENGTH = 100;
	const HERBIVOROUS_TYPE = 'Herbivorous';

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
		return self::HERBIVOROUS_TYPE;
	}
}