<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_finisher',
        'label' => 'type',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'email_subject',
        'iconfile' => 'EXT:formtca/Resources/Public/Icons/tx_formtca_domain_model_finisher.gif',
        'type' => 'type',
        'hideTable' => true,
    ],
    'types' => [
        '0' => ['showitem' => 'type'],
        '1' => ['showitem' => 'type,email_subject'],
        '3' => ['showitem' => 'type,redirect_page'],
    ],
    'columns' => [
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_finisher.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => '',
                'items' => [
                    ['', 0],
                    ['Email to sender', 1],
                    ['Delete Uploads', 2],
                    ['Confirmation message', 3],
                ],
            ],
        ],
        'email_subject' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_finisher.email_subject',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => '',
            ],
        ],
        'redirect_page' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_finisher.redirect_page',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0,
            ],
        ],

        'form' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
