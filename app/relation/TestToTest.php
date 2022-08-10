<?php

namespace app\relation;

use support\relation\abstractRelation;
use support\relation\InterfaceRelation;

/**
 * Test Entity
 */
class TestToTest extends abstractRelation implements InterfaceRelation
{
    public static ?string $table = 'TestToTest';

    public static function addRelation($id1, $id2){}
    public static function delRelation($id1, $id2){}
}