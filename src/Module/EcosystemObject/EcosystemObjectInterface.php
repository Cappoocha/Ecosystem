<?php

/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 20:59
 */

namespace EcosystemObject;
/**
 * Интерфейс для взаимодействия с любым объектом в экосистеме
 *
 * Interface EcosystemInterface
 */
interface EcosystemObjectInterface
{
	/**
	 * @return void
	 */
	public function getParameters();
}