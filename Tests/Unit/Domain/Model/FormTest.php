<?php

declare(strict_types=1);

namespace GeorgRinger\Formtca\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class FormTest extends UnitTestCase
{
    /**
     * @var \GeorgRinger\Formtca\Domain\Model\Form|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GeorgRinger\Formtca\Domain\Model\Form::class,
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
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getSubmitLabelReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getSubmitLabel()
        );
    }

    /**
     * @test
     */
    public function setSubmitLabelForStringSetsSubmitLabel(): void
    {
        $this->subject->setSubmitLabel('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('submitLabel'));
    }

    /**
     * @test
     */
    public function getFinishersReturnsInitialValueForFinisher(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFinishers()
        );
    }

    /**
     * @test
     */
    public function setFinishersForObjectStorageContainingFinisherSetsFinishers(): void
    {
        $finisher = new \GeorgRinger\Formtca\Domain\Model\Finisher();
        $objectStorageHoldingExactlyOneFinishers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFinishers->attach($finisher);
        $this->subject->setFinishers($objectStorageHoldingExactlyOneFinishers);

        self::assertEquals($objectStorageHoldingExactlyOneFinishers, $this->subject->_get('finishers'));
    }

    /**
     * @test
     */
    public function addFinisherToObjectStorageHoldingFinishers(): void
    {
        $finisher = new \GeorgRinger\Formtca\Domain\Model\Finisher();
        $finishersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $finishersObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($finisher));
        $this->subject->_set('finishers', $finishersObjectStorageMock);

        $this->subject->addFinisher($finisher);
    }

    /**
     * @test
     */
    public function removeFinisherFromObjectStorageHoldingFinishers(): void
    {
        $finisher = new \GeorgRinger\Formtca\Domain\Model\Finisher();
        $finishersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $finishersObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($finisher));
        $this->subject->_set('finishers', $finishersObjectStorageMock);

        $this->subject->removeFinisher($finisher);
    }

    /**
     * @test
     */
    public function getStepsReturnsInitialValueForStep(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSteps()
        );
    }

    /**
     * @test
     */
    public function setStepsForObjectStorageContainingStepSetsSteps(): void
    {
        $step = new \GeorgRinger\Formtca\Domain\Model\Step();
        $objectStorageHoldingExactlyOneSteps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSteps->attach($step);
        $this->subject->setSteps($objectStorageHoldingExactlyOneSteps);

        self::assertEquals($objectStorageHoldingExactlyOneSteps, $this->subject->_get('steps'));
    }

    /**
     * @test
     */
    public function addStepToObjectStorageHoldingSteps(): void
    {
        $step = new \GeorgRinger\Formtca\Domain\Model\Step();
        $stepsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stepsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($step));
        $this->subject->_set('steps', $stepsObjectStorageMock);

        $this->subject->addStep($step);
    }

    /**
     * @test
     */
    public function removeStepFromObjectStorageHoldingSteps(): void
    {
        $step = new \GeorgRinger\Formtca\Domain\Model\Step();
        $stepsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stepsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($step));
        $this->subject->_set('steps', $stepsObjectStorageMock);

        $this->subject->removeStep($step);
    }
}
