<?php

declare(strict_types=1);

namespace GeorgRinger\Formtca\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class StepTest extends UnitTestCase
{
    /**
     * @var \GeorgRinger\Formtca\Domain\Model\Step|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GeorgRinger\Formtca\Domain\Model\Step::class,
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
    public function getStepNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getStepName()
        );
    }

    /**
     * @test
     */
    public function setStepNameForStringSetsStepName(): void
    {
        $this->subject->setStepName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('stepName'));
    }

    /**
     * @test
     */
    public function getPreviousButtonLabelReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPreviousButtonLabel()
        );
    }

    /**
     * @test
     */
    public function setPreviousButtonLabelForStringSetsPreviousButtonLabel(): void
    {
        $this->subject->setPreviousButtonLabel('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('previousButtonLabel'));
    }

    /**
     * @test
     */
    public function getNextButtonLabelReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getNextButtonLabel()
        );
    }

    /**
     * @test
     */
    public function setNextButtonLabelForStringSetsNextButtonLabel(): void
    {
        $this->subject->setNextButtonLabel('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('nextButtonLabel'));
    }

    /**
     * @test
     */
    public function getFieldsReturnsInitialValueForField(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFields()
        );
    }

    /**
     * @test
     */
    public function setFieldsForObjectStorageContainingFieldSetsFields(): void
    {
        $field = new \GeorgRinger\Formtca\Domain\Model\Field();
        $objectStorageHoldingExactlyOneFields = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFields->attach($field);
        $this->subject->setFields($objectStorageHoldingExactlyOneFields);

        self::assertEquals($objectStorageHoldingExactlyOneFields, $this->subject->_get('fields'));
    }

    /**
     * @test
     */
    public function addFieldToObjectStorageHoldingFields(): void
    {
        $field = new \GeorgRinger\Formtca\Domain\Model\Field();
        $fieldsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fieldsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($field));
        $this->subject->_set('fields', $fieldsObjectStorageMock);

        $this->subject->addField($field);
    }

    /**
     * @test
     */
    public function removeFieldFromObjectStorageHoldingFields(): void
    {
        $field = new \GeorgRinger\Formtca\Domain\Model\Field();
        $fieldsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $fieldsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($field));
        $this->subject->_set('fields', $fieldsObjectStorageMock);

        $this->subject->removeField($field);
    }
}
