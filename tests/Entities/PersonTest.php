<?php declare (strict_types=1);

namespace tests\Entities;

use PHPUnit\Framework\TestCase;
use App\Entities\Person;

class PersonTest extends TestCase
{
    public function testCanGetTrueFromEquals()
    {
        $person = new Person('KAS');
        $this->assertTrue($person->equals($person));
    }
}
