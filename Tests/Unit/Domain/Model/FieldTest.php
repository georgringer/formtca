<?php

declare(strict_types=1);

namespace GeorgRinger\Formtca\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class FieldTest extends UnitTestCase
{
    /**
     * @var \GeorgRinger\Formtca\Domain\Model\Field|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GeorgRinger\Formtca\Domain\Model\Field::class,
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
    public function getLabelReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLabel()
        );
    }

    /**
     * @test
     */
    public function setLabelForStringSetsLabel(): void
    {
        $this->subject->setLabel('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('label'));
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('description'));
    }

    /**
     * @test
     */
    public function getPlaceholderReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPlaceholder()
        );
    }

    /**
     * @test
     */
    public function setPlaceholderForStringSetsPlaceholder(): void
    {
        $this->subject->setPlaceholder('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('placeholder'));
    }

    /**
     * @test
     */
    public function getRequiredReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getRequired());
    }

    /**
     * @test
     */
    public function setRequiredForBoolSetsRequired(): void
    {
        $this->subject->setRequired(true);

        self::assertEquals(true, $this->subject->_get('required'));
    }

    /**
     * @test
     */
    public function getValidatorsReturnsInitialValueForValidator(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getValidators()
        );
    }

    /**
     * @test
     */
    public function setValidatorsForObjectStorageContainingValidatorSetsValidators(): void
    {
        $validator = new \GeorgRinger\Formtca\Domain\Model\Validator();
        $objectStorageHoldingExactlyOneValidators = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneValidators->attach($validator);
        $this->subject->setValidators($objectStorageHoldingExactlyOneValidators);

        self::assertEquals($objectStorageHoldingExactlyOneValidators, $this->subject->_get('validators'));
    }

    /**
     * @test
     */
    public function addValidatorToObjectStorageHoldingValidators(): void
    {
        $validator = new \GeorgRinger\Formtca\Domain\Model\Validator();
        $validatorsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $validatorsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($validator));
        $this->subject->_set('validators', $validatorsObjectStorageMock);

        $this->subject->addValidator($validator);
    }

    /**
     * @test
     */
    public function removeValidatorFromObjectStorageHoldingValidators(): void
    {
        $validator = new \GeorgRinger\Formtca\Domain\Model\Validator();
        $validatorsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $validatorsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($validator));
        $this->subject->_set('validators', $validatorsObjectStorageMock);

        $this->subject->removeValidator($validator);
    }
}
