<?php

namespace JMS\JobQueueBundle\Tests\Functional\TestBundle\Command;

use DateTime;
use JMS\JobQueueBundle\Console\CronCommand;
use JMS\JobQueueBundle\Entity\Job;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: self::NAME)]
class ScheduledEveryFewSecondsCommand extends Command implements CronCommand
{
    public const NAME = 'scheduled-every-few-seconds';

    public function shouldBeScheduled(DateTime $lastRunAt): bool
    {
        return time() - $lastRunAt->getTimestamp() >= 5;
    }

    public function createCronJob(DateTime $_): Job
    {
        return new Job(self::NAME);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Done');

        return Command::SUCCESS;
    }
}
