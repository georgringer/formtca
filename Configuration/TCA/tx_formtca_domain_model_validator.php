<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_validator',
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
        'searchFields' => 'custom_error_message',
        'iconfile' => 'EXT:formtca/Resources/Public/Icons/tx_formtca_domain_model_validator.gif',
        'type' => 'type',
        'hideTable' => true,
    ],
    'types' => [
        '1' => ['showitem' => 'type, custom_error_message'],
        '3' => ['showitem' => 'type, custom_error_message, minimum, maximum'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_formtca_domain_model_validator',
                'foreign_table_where' => 'AND {#tx_formtca_domain_model_validator}.{#pid}=###CURRENT_PID### AND {#tx_formtca_domain_model_validator}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_validator.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => '',
                'items' => [
                    ['', 0],
                    ['Alphanumeric', 1],
                    ['Email', 2],
                    ['Integer Number', 3],
                    ['Regular expression', 4],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'custom_error_message' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_validator.custom_error_message',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'minimum' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_validator.minimum',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'maximum' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_validator.maximum',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],

        'field' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
