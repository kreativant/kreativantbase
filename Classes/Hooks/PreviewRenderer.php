<?php
namespace Kreativant\KreativantBase\Hooks\PageLayoutView;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Backend\View\PageLayoutView;
use TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;


/**
 * Contains a preview rendering for the page module of CType="imageslider"
 */
class SliderPreviewRenderer implements PageLayoutViewDrawItemHookInterface
{
    /**
     * Preprocesses the preview rendering of a content element of type "imageslider"
     *
     * @param \TYPO3\CMS\Backend\View\PageLayoutView $parentObject Calling parent object
     * @param bool $drawItem Whether to draw the item using the default functionality
     * @param string $headerContent Header content
     * @param string $itemContent Item content
     * @param array $row Record row of tt_content
     * @return void
     */

     public function preProcess(
        PageLayoutView &$parentObject,
        &$drawItem,
        &$headerContent,
        &$itemContent,
        array &$row
    )
    {

        if ($row['CType'] === 'teaser' && $row['tx_kreativant_teaser']) {
            $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_kreativant_teaser');
            $res = $connection->select(['uid', 'headline', 'bodytext', 'image'], 'tx_kreativant_teaser', ['tt_content' => $row['uid']], [], [], 10);

            $content = '';
            $itemsArr = [];

            while ($childRow = $res->fetch()) {

                $image = '0';

                if ( $childRow['image'] ) {
                    $image = $parentObject->getThumbCodeUnlinked($childRow, 'tx_kreativant_teaser', 'image');

                }
                array_push($itemsArr, ['ctype'=> 'Teaser', 'headline' => $childRow['headline'],'bodytext' => $childRow['bodytext'],'image' => $image]);
            }

            /** @var \TYPO3\CMS\Fluid\View\StandaloneView $fluidTemplate */
            $fluidTmplFilePath = GeneralUtility::getFileAbsFileName('typo3conf/ext/kreativantbase/Resources/Private/Templates/Admin/AdminTemplate.html');
            $fluidTmpl = GeneralUtility::makeInstance('TYPO3\CMS\Fluid\View\StandaloneView');
            $fluidTmpl->setTemplatePathAndFilename($fluidTmplFilePath);
            $fluidTmpl->assign('items', $itemsArr);

            // Rendern
            $itemContent = $fluidTmpl->render();
        }

        if ($row['CType'] === 'slider' && $row['tx_kreativant_slider']) {
            $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_kreativant_slider');
            $res = $connection->select(['uid', 'headline', 'bodytext', 'image'], 'tx_kreativant_slider', ['tt_content' => $row['uid']], [], [], 10);

            $content = '';
            $itemsArr = [];

            while ($childRow = $res->fetch()) {

                $image = '0';
                if ($childRow['image']) {
                    $image = $parentObject->getThumbCodeUnlinked($childRow, 'tx_kreativant_slider', 'image');

                }
                array_push($itemsArr, ['ctype' => 'Slider', 'headline' => $childRow['headline'], 'bodytext' => $childRow['bodytext'], 'image' => $image]);
            }

            /** @var \TYPO3\CMS\Fluid\View\StandaloneView $fluidTemplate */
            $fluidTmplFilePath = GeneralUtility::getFileAbsFileName('typo3conf/ext/kreativantbase/Resources/Private/Templates/Admin/AdminTemplate.html');
            $fluidTmpl = GeneralUtility::makeInstance('TYPO3\CMS\Fluid\View\StandaloneView');
            $fluidTmpl->setTemplatePathAndFilename($fluidTmplFilePath);
            $fluidTmpl->assign('items', $itemsArr);

            // Rendern
            $itemContent = $fluidTmpl->render();
        }

        if ($row['CType'] === 'tabs' && $row['tx_kreativant_tabs']) {
            $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_kreativant_tabs');
            $res = $connection->select(['uid', 'headline', 'bodytext', 'image'], 'tx_kreativant_tabs', ['tt_content' => $row['uid']], [], [], 10);

            $content = '';
            $itemsArr = [];

            while ($childRow = $res->fetch()) {

                $image = '0';
                if ( $childRow['image'] ) {
                    $image = $parentObject->getThumbCodeUnlinked($childRow, 'tx_kreativant_tabs', 'image');

                }
                array_push($itemsArr, ['ctype'=> 'Tab', 'headline' => $childRow['headline'],'bodytext' => $childRow['bodytext'],'image' => $image]);
            }

            /** @var \TYPO3\CMS\Fluid\View\StandaloneView $fluidTemplate */
            $fluidTmplFilePath = GeneralUtility::getFileAbsFileName('typo3conf/ext/kreativantbase/Resources/Private/Templates/Admin/AdminTemplate.html');
            $fluidTmpl = GeneralUtility::makeInstance('TYPO3\CMS\Fluid\View\StandaloneView');
            $fluidTmpl->setTemplatePathAndFilename($fluidTmplFilePath);
            $fluidTmpl->assign('items', $itemsArr);

            // Rendern
            $itemContent = $fluidTmpl->render();
        }

        if ($row['CType'] === 'accordion' && $row['tx_kreativant_accordion']) {
            $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_kreativant_accordion');
            $res = $connection->select(['uid', 'headline', 'bodytext', 'image'], 'tx_kreativant_accordion', ['tt_content' => $row['uid']], [], [], 10);

            $content = '';
            $itemsArr = [];

            while ($childRow = $res->fetch()) {

                $image = '0';
                if ( $childRow['image'] ) {
                    $image = $parentObject->getThumbCodeUnlinked($childRow, 'tx_kreativant_accordion', 'image');

                }
                array_push($itemsArr, ['ctype'=> 'Accordion', 'headline' => $childRow['headline'],'bodytext' => $childRow['bodytext'],'image' => $image]);
            }

            /** @var \TYPO3\CMS\Fluid\View\StandaloneView $fluidTemplate */
            $fluidTmplFilePath = GeneralUtility::getFileAbsFileName('typo3conf/ext/kreativantbase/Resources/Private/Templates/Admin/AdminTemplate.html');
            $fluidTmpl = GeneralUtility::makeInstance('TYPO3\CMS\Fluid\View\StandaloneView');
            $fluidTmpl->setTemplatePathAndFilename($fluidTmplFilePath);
            $fluidTmpl->assign('items', $itemsArr);

            // Rendern
            $itemContent = $fluidTmpl->render();
        }
    }
}