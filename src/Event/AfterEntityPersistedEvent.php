<?php

namespace App\Event;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
final class AfterEntityPersistedEvent
{
    private $entityInstance;

    public function __construct($entityInstance)
    {
        $this->entityInstance = $entityInstance;
    }

    public function getEntityInstance()
    {
        return $this->entityInstance;
    }
}
