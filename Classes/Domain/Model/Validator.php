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
 * Validator
 */
class Validator extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * type
     *
     * @var int
     */
    protected $type = null;

    /**
     * customErrorMessage
     *
     * @var string
     */
    protected $customErrorMessage = null;

    /**
     * minimum
     *
     * @var int
     */
    protected $minimum = null;

    /**
     * maximum
     *
     * @var int
     */
    protected $maximum = null;

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
     * Returns the customErrorMessage
     *
     * @return string
     */
    public function getCustomErrorMessage()
    {
        return $this->customErrorMessage;
    }

    /**
     * Sets the customErrorMessage
     *
     * @param string $customErrorMessage
     * @return void
     */
    public function setCustomErrorMessage(string $customErrorMessage)
    {
        $this->customErrorMessage = $customErrorMessage;
    }

    /**
     * Returns the minimum
     *
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Sets the minimum
     *
     * @param int $minimum
     * @return void
     */
    public function setMinimum(int $minimum)
    {
        $this->minimum = $minimum;
    }

    /**
     * Returns the maximum
     *
     * @return int
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Sets the maximum
     *
     * @param int $maximum
     * @return void
     */
    public function setMaximum(int $maximum)
    {
        $this->maximum = $maximum;
    }
}
