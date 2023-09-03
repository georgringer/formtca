<?php

declare(strict_types=1);

namespace GeorgRinger\Formtca\Domain\Model;


/**
 * This file is part of the "formtca" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * Step
 */
class Step extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * stepName
     *
     * @var string
     */
    protected $stepName = null;

    /**
     * previousButtonLabel
     *
     * @var string
     */
    protected $previousButtonLabel = null;

    /**
     * nextButtonLabel
     *
     * @var string
     */
    protected $nextButtonLabel = null;

    /**
     * fields
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Field>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $fields = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->fields = $this->fields ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the stepName
     *
     * @return string
     */
    public function getStepName()
    {
        return $this->stepName;
    }

    /**
     * Sets the stepName
     *
     * @param string $stepName
     * @return void
     */
    public function setStepName(string $stepName)
    {
        $this->stepName = $stepName;
    }

    /**
     * Returns the previousButtonLabel
     *
     * @return string
     */
    public function getPreviousButtonLabel()
    {
        return $this->previousButtonLabel;
    }

    /**
     * Sets the previousButtonLabel
     *
     * @param string $previousButtonLabel
     * @return void
     */
    public function setPreviousButtonLabel(string $previousButtonLabel)
    {
        $this->previousButtonLabel = $previousButtonLabel;
    }

    /**
     * Returns the nextButtonLabel
     *
     * @return string
     */
    public function getNextButtonLabel()
    {
        return $this->nextButtonLabel;
    }

    /**
     * Sets the nextButtonLabel
     *
     * @param string $nextButtonLabel
     * @return void
     */
    public function setNextButtonLabel(string $nextButtonLabel)
    {
        $this->nextButtonLabel = $nextButtonLabel;
    }

    /**
     * Adds a Field
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Field $field
     * @return void
     */
    public function addField(\GeorgRinger\Formtca\Domain\Model\Field $field)
    {
        $this->fields->attach($field);
    }

    /**
     * Removes a Field
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Field $fieldToRemove The Field to be removed
     * @return void
     */
    public function removeField(\GeorgRinger\Formtca\Domain\Model\Field $fieldToRemove)
    {
        $this->fields->detach($fieldToRemove);
    }

    /**
     * Returns the fields
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Field>
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Sets the fields
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Field> $fields
     * @return void
     */
    public function setFields(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $fields)
    {
        $this->fields = $fields;
    }
}
