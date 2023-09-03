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
 * Finisher
 */
class Finisher extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * type
     *
     * @var int
     */
    protected $type = null;

    /**
     * emailSubject
     *
     * @var string
     */
    protected $emailSubject = null;

    /**
     * redirectPage
     *
     * @var int
     */
    protected $redirectPage = null;

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
     * Returns the emailSubject
     *
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->emailSubject;
    }

    /**
     * Sets the emailSubject
     *
     * @param string $emailSubject
     * @return void
     */
    public function setEmailSubject(string $emailSubject)
    {
        $this->emailSubject = $emailSubject;
    }

    /**
     * Returns the redirectPage
     *
     * @return int
     */
    public function getRedirectPage()
    {
        return $this->redirectPage;
    }

    /**
     * Sets the redirectPage
     *
     * @param int $redirectPage
     * @return void
     */
    public function setRedirectPage(int $redirectPage)
    {
        $this->redirectPage = $redirectPage;
    }
}
