<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 21:00
 */
use EcosystemObject\Animal;
use EcosystemObject\Plant;

/**
 * Класс экосистемы
 *
 * Class Ecosystem
 */
class Ecosystem
{
	/**
	 * @var Animal[]
	 */
	private $animals;

	/**
	 * @var Plant[]
	 */
	private $plants;

	public function __construct()
	{
		$this->animals = [];
		$this->plants = [];
	}

	/**
	 * Добавляет животное в экосистему
	 *
	 * @param Animal $animal
	 * @return $this
	 */
	public function addAnimal(Animal $animal)
	{
		$this->animals[$animal->getId()] = $animal;

		return $this;
	}

	/**
	 * Удаляет животное из экосистемы
	 *
	 * @param Animal $animal
	 * @return $this
	 */
	public function removeAnimal(Animal $animal)
	{
		$animalId = $animal->getId();

		if (array_key_exists($animalId, $this->animals)) {
			unset($this->animals[$animalId]);
		}

		return $this;
	}

	/**
	 * Добавляет растение в экосистему
	 *
	 * @param Plant $plant
	 * @return $this
	 */
	public function addPlant(Plant $plant)
	{
		$this->plants[$plant->getId()] = $plant;

		return $this;
	}

	/**
	 * Удаляет растение из экосистемы
	 *
	 * @param Plant $plant
	 * @return $this
	 */
	public function removePlant(Plant $plant)
	{
		$plantId = $plant->getId();

		if (array_key_exists($plantId, $this->plants)) {
			unset($this->plants[$plantId]);
		}

		return $this;
	}
}