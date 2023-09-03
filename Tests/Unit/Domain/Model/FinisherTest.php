<?php

declare(strict_types=1);

namespace GeorgRinger\Formtca\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class FinisherTest extends UnitTestCase
{
    /**
     * @var \GeorgRinger\Formtca\Domain\Model\Finisher|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GeorgRinger\Formtca\Domain\Model\Finisher::class,
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
    public function getEmailSubjectReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getEmailSubject()
        );
    }

    /**
     * @test
     */
    public function setEmailSubjectForStringSetsEmailSubject(): void
    {
        $this->subject->setEmailSubject('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('emailSubject'));
    }

    /**
     * @test
     */
    public function getRedirectPageReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getRedirectPage()
        );
    }

    /**
     * @test
     */
    public function setRedirectPageForIntSetsRedirectPage(): void
    {
        $this->subject->setRedirectPage(12);

        self::assertEquals(12, $this->subject->_get('redirectPage'));
    }
}
