<?php
return array(
    'ctrl' => array(
        'label' => 'headline',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'Slider',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideAtCopy' => false,
        'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'dividers2tabs' => true,
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:kreativantbase/ext_icon.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            hidden,
            headline,
            subline,
            bodytext,
            link, 
            linktext,
            image,
            layout_style,
            fullscreen,
            text_black',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
            headline,
            subline,
            bodytext,
            link,
            linktext,
            --div--;Media,
            image,
            --div--;Layout,
            layout_style,
            --div--;Zugriff,
            hidden,
            starttime,
            endtime,
        '
        ),
    ),
    'palettes' => array(
        '1' => array(
            'showitem' => ''
        ),
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'items' => array(
                    '1' => array(
                        '0' => 'LLL:EXT:cms/locallang_ttc.xlf:hidden.I.0'
                    )
                )
            )
        ),

        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0]
                ],
            ],
        ],
        'l10n_parent' => Array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => Array(
                'renderType' => 'selectSingle',
                'type' => 'select',
                'items' => Array(
                    Array('', 0),
                ),
                'foreign_table' => 'tx_kreativant_slider',
                'foreign_table_where' => 'AND tx_kreativant_slider.uid=###REC_FIELD_l10n_parent### AND tx_kreativant_slider.sys_language_uid IN (-1,0)',
            )
        ),
        'l10n_diffsource' => Array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'headline' => array(
            'exclude' => 0,
            'label' => 'Überschrift',
            'config' => array(
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ),
        ),
        'subline' => array(
            'exclude' => 0,
            'label' => 'Subline',
            'config' => array(
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ),
        ),
        'bodytext' => array(
            'label' => 'Bodytext',
            'config' => array(
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'wizards' => array(
                    'RTE' => array(
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type' => 'script',
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.W.RTE',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_rte.gif',
                        'module' => array(
                            'name' => 'wizard_rte'
                        )
                    ),
                ),
            ),
            'defaultExtras' => 'richtext[]'
        ),
        'image' => [
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.images',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                ],
                'overrideChildTca' => [
                    'types' => [
                        '0' => [
                            'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;kreativantbase,
                                --palette--;;kreativantbase'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;kreativantbase,
                                --palette--;;filePalette'
                        ]
                    ],
                ],
            ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'])
        ],
        'link' => array(
            'label' => 'Link',
            'config' => array(
                'type' => 'input',
                'size' => '50',
                'max' => '256',
                'eval' => 'trim',
                'wizards' => array(
                    'link' => array(
                        'type' => 'popup',
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        'icon' => 'actions-wizard-link',
                        'module' => array(
                            'name' => 'wizard_element_browser',
                            'urlParameters' => array(
                                'mode' => 'wizard'
                            )
                        ),
                        'JSopenParams' => 'width=800,height=600,status=0,menubar=0,scrollbars=1'
                    )
                ),
                'softref' => 'typolink',
            ),
        ),
        'linktext' => array(
            'exclude' => 0,
            'label' => 'Linktext',
            'config' => array(
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ),
        ),
        'layout_style' => array(
            'label' => 'Layout',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle'
            ),
        ),
    ),
);
