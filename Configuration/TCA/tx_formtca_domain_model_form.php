<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_form',
        'label' => 'name',
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
        'searchFields' => 'name,submit_label',
        'iconfile' => 'EXT:formtca/Resources/Public/Icons/tx_formtca_domain_model_form.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, submit_label, --div--;Steps,steps,--div--;Finishers,finishers'],
    ],
    'columns' => [
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_form.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'submit_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_form.submit_label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'finishers' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_form.finishers',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_formtca_domain_model_finisher',
                'foreign_selector' => 'type',
                'foreign_field' => 'form',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => true,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'steps' => [
            'exclude' => true,
            'label' => 'LLL:EXT:formtca/Resources/Private/Language/locallang_db.xlf:tx_formtca_domain_model_form.steps',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_formtca_domain_model_step',
                'foreign_field' => 'form',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => true,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],

    ],
];
