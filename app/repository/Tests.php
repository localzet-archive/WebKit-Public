<?php

namespace app\repository;

use support\repository\abstractRepository;
use support\repository\InterfaceRepository;

/**
 * Tests Repository
 */
class Tests extends abstractRepository implements InterfaceRepository
{
    public static ?string $entity = '\app\entity\Test';
    public static ?string $table = 'Tests';
}