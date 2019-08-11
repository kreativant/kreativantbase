<?php
defined('TYPO3_MODE') or die();

/***************
 * Fügt eigene CSS-Dateien zum TYPO3-Backend hinzu;
 */
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY] = array();
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY]['name'] = 'kreativant.Base';
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY]['stylesheetDirectories'] = array(
    'EXT:kreativantbase/Resources/Public/Css/Admin/'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'kreativant.Base');

/***************
 * allow tables
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kreativant_slider');
$TCA['tx_kreativant_slider']['ctrl']['hideTable'] = 1;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kreativant_teaser');
$TCA['tx_kreativant_teaser']['ctrl']['hideTable'] = 1;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kreativant_tabs');
$TCA['tx_kreativant_tabs']['ctrl']['hideTable'] = 1;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kreativant_accordion');
$TCA['tx_kreativant_accordion']['ctrl']['hideTable'] = 1;

