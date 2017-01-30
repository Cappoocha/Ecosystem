<?php
/**
 * @author Катерина
 * Date: 30.01.2017
 * Time: 22:25
 */

namespace Bundle\EcosystemBundle\Command;

use Module\EcosystemObject\Entity\Ecosystem;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Команда для создания экосистемы
 *
 * Class EcosystemCreateCommand
 *
 * @package Bundle\EcosystemBundle\Command
 */
class EcosystemCreateCommand extends ContainerAwareCommand
{
	/**
	 * Размер поля
	 */
	const FIELD_SIZE_ARG_NAME = 'fieldSize';

	/**
	 * Длительность наблюдения
	 */
	const OBSERVE_DURATION_ARG_NAME = 'observeDuration';

	protected function configure()
	{
		$this
			->setName('ecosystem:create')
			->setDescription('Create ecosystem')
			->addArgument(self::FIELD_SIZE_ARG_NAME, InputArgument::REQUIRED, 5)
			->addArgument(self::OBSERVE_DURATION_ARG_NAME, InputArgument::REQUIRED, 5);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$fieldSize = (int)$input->getArgument(self::FIELD_SIZE_ARG_NAME);
		$observeDuration = (int)$input->getArgument(self::OBSERVE_DURATION_ARG_NAME);

		$ecosystem = new Ecosystem($fieldSize, $observeDuration);
	}
}