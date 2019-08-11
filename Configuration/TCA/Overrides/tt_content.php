<?php
defined('TYPO3_MODE') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$_EXTKEY = 'kreativantbase';
#$extConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);


/*
 * add fullwidth to tt_content
 */

$fullwidth = array(
    'fullwidth' => array(
        'exclude' => 1,
        'label' => 'Volle Breite',
        'config' => array(
            'type' => 'check',
        )
    )
);

ExtensionManagementUtility::addTCAcolumns('tt_content', $fullwidth);

/*
 * add aos_animate to tt_content
 */

$aos_animate = array(
    'aos_animate' => array(
        'exclude' => 1,
        'label' => 'AOS Animate',
        'config' => array(
            'type' => 'check',
        )
    )
);

ExtensionManagementUtility::addTCAcolumns('tt_content', $aos_animate);

/*
 * add aos_animate_type to tt_content
 */

$aos_animate_type = array(
    'aos_animate_type' => array(
        'exclude' => 1,
        'label' => 'AOS Animate',
        'config' => array(
            'type' => 'select',
            'renderType'=>'selectSingle',
            'items'=>array(
                array('Default', '0'),
                array('Fade-In', '1'),
                array('Fade-Up', '2'),
                array('Fade-Down', '3'),
                array('Fade-Right', '4'),
                array('Fade-Left', '5'),

            )
        )
    )
);

ExtensionManagementUtility::addTCAcolumns('tt_content', $aos_animate_type);

/*
 * show added fields
 */

$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] .= ',fullwidth,aos_animate,aos_animate_type';


/*
 * add content elements to dropdown
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Benutzerdefinierte Elemente',
        '--div--'
    ],
    '--div--',
    'before'
);

// -- define default fields
$showitem_default_01 = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                        ';
$showitem_default_02 = '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                            --palette--;;language,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                            --palette--;;hidden,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                                categories,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                                rowDescription,
                        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
                        ';

$kreativant_contentelements_default_fields = array(
    'tx_kreativant_slider' => array(
        'exclude' => 0,
        'label' => 'Slider',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_kreativant_slider',
            'foreign_field' => 'tt_content',
            'maxitems' => 999,
            'appearance' => array(
                'collapseAll' => true,
                'useSortable' => true,
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords' => false,
                'expandSingle' => true,
                'enabledControls' => array(
                    'localize' => true,
                ),
            ),
            'behaviour' => array(
                'mode' => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ),
        ),
    ),
    'tx_kreativant_teaser' => array(
        'exclude' => 0,
        'label' => 'Teaser',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_kreativant_teaser',
            'foreign_field' => 'tt_content',
            'maxitems' => 999,
            'appearance' => array(
                'collapseAll' => true,
                'useSortable' => true,
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords' => false,
                'expandSingle' => true,
                'enabledControls' => array(
                    'localize' => true,
                ),
            ),
            'behaviour' => array(
                'mode' => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ),
        ),
    ),
    'tx_kreativant_accordion' => array(
        'exclude' => 0,
        'label' => 'Element',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_kreativant_accordion',
            'foreign_field' => 'tt_content',
            'maxitems' => 999,
            'appearance' => array(
                'collapseAll' => true,
                'useSortable' => true,
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords' => false,
                'expandSingle' => true,
                'enabledControls' => array(
                    'localize' => true,
                ),
            ),
            'behaviour' => array(
                'mode' => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ),
        ),
    ),
    'tx_kreativant_tabs' => array(
        'exclude' => 0,
        'label' => 'Tile',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_kreativant_tabs',
            'foreign_field' => 'tt_content',
            'maxitems' => 999,
            'appearance' => array(
                'collapseAll' => true,
                'useSortable' => true,
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords' => false,
                'expandSingle' => true,
                'enabledControls' => array(
                    'localize' => true,
                ),
            ),
            'behaviour' => array(
                'mode' => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ),
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $kreativant_contentelements_default_fields);

// Slider - START
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Slider',
        'slider',
        'kreativanticon'
    ],
    '--div--',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['slider'] = array(
    'showitem' => $showitem_default_01 . '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
        
        tx_kreativant_slider;Slider,   
    ' . $showitem_default_02,
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slider'] =
    'FILE:EXT:kreativantbase/Configuration/FlexForms/slider.xml';

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slider'] = 'kreativanticon';

$GLOBALS['TCA']['tx_kreativant_slider']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'title' => 'Slider Image Crop',
            'allowedAspectRatios' => [
                '3:2' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
                '16:9' => [
                    'title' => '16:9',
                    'value' => 16 / 9
                ],
                '21:9' => [
                    'title' => '21:9',
                    'value' => 21 / 9
                ],
                'NaN' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => 'NaN',
        ],
    ],
];
// Slider - END

// Teaser - END
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Teaser',
        'teaser',
        'kreativanticon'
    ],
    '--div--',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['teaser'] = array(
    'showitem' => $showitem_default_01 . '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
        tx_kreativant_teaser;Teaser,   
    ' . $showitem_default_02,
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',teaser'] =
    'FILE:EXT:kreativantbase/Configuration/FlexForms/teaser.xml';

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['teaser'] = 'kreativanticon';

$GLOBALS['TCA']['tx_kreativant_teaser']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'title' => 'Teaser Image Crop',
            'allowedAspectRatios' => [
                '3:2' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
                '16:9' => [
                    'title' => '16:9',
                    'value' => 16 / 9
                ],
                '21:9' => [
                    'title' => '21:9',
                    'value' => 21 / 9
                ],
                'NaN' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => 'NaN',
        ],
    ],
];
// Teaser - END

// Accordion - START
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Akkordeon',
        'accordion',
        'kreativanticon'
    ],
    '--div--',
    'after'
);
$GLOBALS['TCA']['tt_content']['types']['accordion'] = array(
    'showitem' => $showitem_default_01 . '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
        tx_kreativant_accordion;Accordion,   
    ' . $showitem_default_02,
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',accordion'] =
    'FILE:EXT:kreativantbase/Configuration/FlexForms/accordion.xml';

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['accordion'] = 'kreativanticon';

$GLOBALS['TCA']['tx_kreativant_accordion']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'title' => 'Tile Image Crop',
            'allowedAspectRatios' => [
                '3:2' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
                '16:9' => [
                    'title' => '16:9',
                    'value' => 16 / 9
                ],
                '21:9' => [
                    'title' => '21:9',
                    'value' => 21 / 9
                ],
                'NaN' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => '1',
        ],
    ],
];
// Accordion - END

// Tabs - START
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Tabs',
        'tabs',
        'kreativanticon'
    ],
    '--div--',
    'after'
);
$GLOBALS['TCA']['tt_content']['types']['tabs'] = array(
    'showitem' => $showitem_default_01 . '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
        tx_kreativant_tabs;Tabs,   
    ' . $showitem_default_02,
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',tabs'] =
    'FILE:EXT:kreativantbase/Configuration/FlexForms/tabs.xml';

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['tabs'] = 'kreativanticon';

$GLOBALS['TCA']['tx_kreativant_tabs']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
        'default' => [
            'title' => 'Tile Image Crop',
            'allowedAspectRatios' => [
                '3:2' => [
                    'title' => '3:2',
                    'value' => 3 / 2
                ],
                '16:9' => [
                    'title' => '16:9',
                    'value' => 16 / 9
                ],
                '21:9' => [
                    'title' => '21:9',
                    'value' => 21 / 9
                ],
                'NaN' => [
                    'title' => 'Free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => '1',
        ],
    ],
];
// Tabs - END
