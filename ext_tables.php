<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_formtca_domain_model_form', 'EXT:formtca/Resources/Private/Language/locallang_csh_tx_formtca_domain_model_form.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_formtca_domain_model_form');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_formtca_domain_model_field', 'EXT:formtca/Resources/Private/Language/locallang_csh_tx_formtca_domain_model_field.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_formtca_domain_model_field');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_formtca_domain_model_validator', 'EXT:formtca/Resources/Private/Language/locallang_csh_tx_formtca_domain_model_validator.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_formtca_domain_model_validator');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_formtca_domain_model_finisher', 'EXT:formtca/Resources/Private/Language/locallang_csh_tx_formtca_domain_model_finisher.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_formtca_domain_model_finisher');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_formtca_domain_model_step', 'EXT:formtca/Resources/Private/Language/locallang_csh_tx_formtca_domain_model_step.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_formtca_domain_model_step');
})();
