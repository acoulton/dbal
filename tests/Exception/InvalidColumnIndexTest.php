<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Tests\Exception;

use Doctrine\DBAL\Exception\InvalidColumnIndex;
use PHPUnit\Framework\TestCase;

class InvalidColumnIndexTest extends TestCase
{
    public function testNew() : void
    {
        $exception = InvalidColumnIndex::new(5, 1);

        self::assertSame('Invalid column index 5. The statement result contains 1 column.', $exception->getMessage());
    }

    public function testNewPlural() : void
    {
        $exception = InvalidColumnIndex::new(5, 2);

        self::assertSame('Invalid column index 5. The statement result contains 2 columns.', $exception->getMessage());
    }
}
