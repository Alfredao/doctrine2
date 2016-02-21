<?php

namespace Doctrine\Tests\ORM\Functional\Ticket;

/**
 * @group DDC4024
 */
class DDC4024Test extends \Doctrine\Tests\DoctrineTestCase
{
    public function testNonUniqueResultExceptionMessage()
    {
        $exception = new \Doctrine\ORM\NonUniqueResultException();
        static::assertEquals('More than one result was found for query although one row or none was expected.', $exception->getMessage());
    }
}
