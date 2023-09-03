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
 * Form
 */
class Form extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = null;

    /**
     * submitLabel
     *
     * @var string
     */
    protected $submitLabel = null;

    /**
     * finishers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Finisher>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $finishers = null;

    /**
     * steps
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Step>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $steps = null;

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
        $this->finishers = $this->finishers ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->steps = $this->steps ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the submitLabel
     *
     * @return string
     */
    public function getSubmitLabel()
    {
        return $this->submitLabel;
    }

    /**
     * Sets the submitLabel
     *
     * @param string $submitLabel
     * @return void
     */
    public function setSubmitLabel(string $submitLabel)
    {
        $this->submitLabel = $submitLabel;
    }

    /**
     * Adds a Finisher
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Finisher $finisher
     * @return void
     */
    public function addFinisher(\GeorgRinger\Formtca\Domain\Model\Finisher $finisher)
    {
        $this->finishers->attach($finisher);
    }

    /**
     * Removes a Finisher
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Finisher $finisherToRemove The Finisher to be removed
     * @return void
     */
    public function removeFinisher(\GeorgRinger\Formtca\Domain\Model\Finisher $finisherToRemove)
    {
        $this->finishers->detach($finisherToRemove);
    }

    /**
     * Returns the finishers
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Finisher>
     */
    public function getFinishers()
    {
        return $this->finishers;
    }

    /**
     * Sets the finishers
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Finisher> $finishers
     * @return void
     */
    public function setFinishers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $finishers)
    {
        $this->finishers = $finishers;
    }

    /**
     * Adds a Step
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Step $step
     * @return void
     */
    public function addStep(\GeorgRinger\Formtca\Domain\Model\Step $step)
    {
        $this->steps->attach($step);
    }

    /**
     * Removes a Step
     *
     * @param \GeorgRinger\Formtca\Domain\Model\Step $stepToRemove The Step to be removed
     * @return void
     */
    public function removeStep(\GeorgRinger\Formtca\Domain\Model\Step $stepToRemove)
    {
        $this->steps->detach($stepToRemove);
    }

    /**
     * Returns the steps
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Step>
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Sets the steps
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\Formtca\Domain\Model\Step> $steps
     * @return void
     */
    public function setSteps(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $steps)
    {
        $this->steps = $steps;
    }
}
