<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_step',
        'label' => 'step_name',
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
        'searchFields' => 'step_name,previous_button_label,next_button_label',
        'iconfile' => 'EXT:formtca/Resources/Public/Icons/tx_formtca_domain_model_step.gif',
        'hideTable' => true,
    ],
    'types' => [
        '1' => ['showitem' => 'step_name,--palette--;;paletteMain,fields'],
    ],
    'palettes' => [
        'paletteMain' => ['showitem' => 'previous_button_label, next_button_label,'],
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
                'foreign_table' => 'tx_formtca_domain_model_step',
                'foreign_table_where' => 'AND {#tx_formtca_domain_model_step}.{#pid}=###CURRENT_PID### AND {#tx_formtca_domain_model_step}.{#sys_language_uid} IN (-1,0)',
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

        'step_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_step.step_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'previous_button_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_step.previous_button_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'next_button_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_step.next_button_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'fields' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_step.fields',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_formtca_domain_model_field',
                'foreign_field' => 'step',
                'foreign_selector' => 'type',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],

        'form' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
