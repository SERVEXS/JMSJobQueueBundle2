<?php

namespace JMS\JobQueueBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'jms_cron_jobs')]
#[ORM\ChangeTrackingPolicy('DEFERRED_EXPLICIT')]
class CronJob
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', options: ['unsigned' => true])]
    private ?int $id = null;

    #[ORM\Column(name: 'lastRunAt', type: 'datetime')]
    private DateTime $lastRunAt;

    public function __construct(
        #[ORM\Column(type: 'string', length: 200, unique: true)]
        private $command,
    ) {
        $this->lastRunAt = new DateTime();
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getLastRunAt(): DateTime
    {
        return $this->lastRunAt;
    }
}
