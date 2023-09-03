<?php

declare(strict_types=1);

namespace GeorgRinger\Formtca\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ValidatorTest extends UnitTestCase
{
    /**
     * @var \GeorgRinger\Formtca\Domain\Model\Validator|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GeorgRinger\Formtca\Domain\Model\Validator::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType(): void
    {
        $this->subject->setType(12);

        self::assertEquals(12, $this->subject->_get('type'));
    }

    /**
     * @test
     */
    public function getCustomErrorMessageReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getCustomErrorMessage()
        );
    }

    /**
     * @test
     */
    public function setCustomErrorMessageForStringSetsCustomErrorMessage(): void
    {
        $this->subject->setCustomErrorMessage('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('customErrorMessage'));
    }

    /**
     * @test
     */
    public function getMinimumReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getMinimum()
        );
    }

    /**
     * @test
     */
    public function setMinimumForIntSetsMinimum(): void
    {
        $this->subject->setMinimum(12);

        self::assertEquals(12, $this->subject->_get('minimum'));
    }

    /**
     * @test
     */
    public function getMaximumReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getMaximum()
        );
    }

    /**
     * @test
     */
    public function setMaximumForIntSetsMaximum(): void
    {
        $this->subject->setMaximum(12);

        self::assertEquals(12, $this->subject->_get('maximum'));
    }
}
