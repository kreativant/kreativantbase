<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $tmp_sys_file_reference);

$GLOBALS['TCA']['sys_file_reference']['palettes']['kreativantbase'] = array(
    'showitem' => 'title,alternative,--linebreak--,crop,description'
);

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = array(
    'type' => 'imageManipulation',
    'ratios' => array(
        'NaN' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.free',
        '1.7777777777777777' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
        '1.6' => '16:10',
        '3.615530303030303' => 'Slider Bild',
        '1.3333333333333333' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.4_3',
        '1' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.1_1',
        '1' => 'Kachel 1:1 / Kachel 2:2',
        '2.117647058823529' => 'Kachel 2:1',
        '0.4722222222222222' => 'Kachel 1:2'
    ),
    'cropVariants' => array(
      'default' => array(
          'title' => 'Default',
          'allowedAspectRatios' => array(
            'NaN' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ),
            '4:3' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.4_3',
                'value' => 4 / 3
            ),
            '16:9' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
                'value' => 16 / 9
            ),
              '16:10' => array(
                  'title' => '16:10',
                  'value' => 16 / 10
              ),
              '1909:528' => array(
                  'title' => 'Slider Bild',
                  'value' => 1909 / 528
              ),
            '1:1' => array(
                'title' => '1:1',
                'value' => 1 / 1
            ),
            '2:1' => array(
                'title' => '2:1',
                'value' => 2 / 1
            ),
            '1:2' => array(
                'title' => '1:2',
                'value' => 1 / 2
            ),
        )
      ),
      'mobile' => array(
          'title' => 'Mobil',
          'allowedAspectRatios' => array(
            'NaN' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ),
            '4:3' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.4_3',
                'value' => 4 / 3
            ),
            '16:9' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
                'value' => 16 / 9
            ),
              '16:10' => array(
                  'title' => '16:10',
                  'value' => 16 / 10
              ),
              '1909:528' => array(
                  'title' => 'Slider Bild',
                  'value' => 1909 / 528
              ),
            '1:1' => array(
                'title' => '1:1',
                'value' => 1 / 1
            ),
            '2:1' => array(
                'title' => '2:1',
                'value' => 2 / 1
            ),
            '1:2' => array(
                'title' => '1:2',
                'value' => 1 / 2
            ),
        )
      ),
      'tablet' => array(
          'title' => 'Tablet',
          'allowedAspectRatios' => array(
            'NaN' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ),
            '4:3' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.4_3',
                'value' => 4 / 3
            ),
            '16:9' => array(
                'title' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
                'value' => 16 / 9
            ),
          '16:10' => array(
              'title' => '16:10',
              'value' => 16 / 10
          ),
              '1909:528' => array(
                  'title' => 'Slider Bild',
                  'value' => 1909 / 528
              ),
            '1:1' => array(
                'title' => '1:1',
                'value' => 1 / 1
            ),
            '2:1' => array(
                'title' => '2:1',
                'value' => 2 / 1
            ),
            '1:2' => array(
                'title' => '1:2',
                'value' => 1 / 2
            ),
        )
      )

    )
);
