<?php
/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 22:06
 */

namespace Module\EcosystemObject\Entity;


use EcosystemObject\EcosystemObjectInterface;

/**
 * Class EcosystemObject
 *
 * @package Module\EcosystemObject
 */
abstract class EcosystemObject implements EcosystemObjectInterface
{
	/**
	 * @var int
	 */
	private $positionX;

	/**
	 * @var int
	 */
	private $positionY;

	/**
	 * Устанавливает позицию объекта в экосистеме
	 *
	 * @param int $positionX
	 * @param int $positionY
	 *
	 * @return void
	 */
	public function setPosition($positionX, $positionY)
	{
		$this->positionX = $positionX;
		$this->positionY = $positionY;
	}
}