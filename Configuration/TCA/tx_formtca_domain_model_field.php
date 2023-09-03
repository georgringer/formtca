<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_field',
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
        'searchFields' => 'label,description,placeholder',
        'iconfile' => 'EXT:formtca/Resources/Public/Icons/tx_formtca_domain_model_field.gif',
        'type' => 'type',
        'hideTable' => true,
    ],
    'types' => [
        '1' => ['showitem' => '--palette--;;paletteMain,validators'],
    ],
    'palettes' => [
        'paletteMain' => ['showitem' => 'type,label,--linebreak--,placeholder, required'],
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
                'foreign_table' => 'tx_formtca_domain_model_field',
                'foreign_table_where' => 'AND {#tx_formtca_domain_model_field}.{#pid}=###CURRENT_PID### AND {#tx_formtca_domain_model_field}.{#sys_language_uid} IN (-1,0)',
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
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_field.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => '',
                'default' => 'text',
                'items' => [
//                    ['', ''],
//                    ['Basic Elements', '--div--'],
                    ['Text', 'text'],
                    ['Textarea', 'textarea'],
                    ['Special Elements', '--div--'],
                    ['Password', 'password'],
                    ['Email', 'email'],
                    ['Telephone number', 'tel'],
                    ['URL', 'url'],
                    ['Number', 'number'],
                    ['date', 'date'],
                    ['Select Elements', '--div--'],
                ],
            ],
        ],
        'label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_field.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_field.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'placeholder' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_field.placeholder',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'required' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_field.required',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'validators' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_field.validators',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_formtca_domain_model_validator',
                'foreign_field' => 'field',
                'foreign_selector' => 'type',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],

        'step' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
