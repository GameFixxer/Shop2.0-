<?php declare(strict_types=1);

namespace App\Console;

use Xervice\Console\Business\Model\Command\AbstractCommand;
use Xervice\Console\ConsoleDependencyProvider as XerviceConsoleDependencyProvider;
use Xervice\DataProvider\Communication\Console\CleanCommand;
use Xervice\DataProvider\Communication\Console\GenerateCommand;

class ConsoleDependencyProvider extends XerviceConsoleDependencyProvider
{
    /**
     * @return array<AbstractCommand>
     */
    protected function getCommandList(): array
    {
        return [
            new CleanCommand(),
            new GenerateCommand()
        ];
    }
}
