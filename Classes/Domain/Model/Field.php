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
 * Field
 */
class Field extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * type
     *
     * @var int
     */
    protected $type = null;

    /**
     * label
     *
     * @var string
     */
    protected $label = null;

    /**
     * description
     *
     * @var string
     */
    protected $description = null;

    /**
     * placeholder
     *
     * @var string
     */
    protected $placeholder = null;

    /**
     * required
     *
     * @var bool
     */
    protected $required = null;

    /**
     * validators
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Validator>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $validators = null;

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
        $this->validators = $this->validators ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param int $type
     * @return void
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }

    /**
     * Returns the label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the label
     *
     * @param string $label
     * @return void
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the placeholder
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Sets the placeholder
     *
     * @param string $placeholder
     * @return void
     */
    public function setPlaceholder(string $placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * Returns the required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets the required
     *
     * @param bool $required
     * @return void
     */
    public function setRequired(bool $required)
    {
        $this->required = $required;
    }

    /**
     * Returns the boolean state of required
     *
     * @return bool
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * Adds a Validator
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Validator $validator
     * @return void
     */
    public function addValidator(\GeorgRinger\Formtca\Domain\Model\Validator $validator)
    {
        $this->validators->attach($validator);
    }

    /**
     * Removes a Validator
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Validator $validatorToRemove The Validator to be removed
     * @return void
     */
    public function removeValidator(\GeorgRinger\Formtca\Domain\Model\Validator $validatorToRemove)
    {
        $this->validators->detach($validatorToRemove);
    }

    /**
     * Returns the validators
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Validator>
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * Sets the validators
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Validator> $validators
     * @return void
     */
    public function setValidators(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $validators)
    {
        $this->validators = $validators;
    }
}
