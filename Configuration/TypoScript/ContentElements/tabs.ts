tt_content.tabs = FLUIDTEMPLATE
tt_content.tabs {
    templateName = Tabs
    templateRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Templates/ContentElements/Tabs/
        20 = EXT:kreativanttheme/Resources/Private/Templates/ContentElements/Tabs/
    }

    partialRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Partials/ContentElements/Tabs/
        20 = EXT:kreativanttheme/Resources/Private/Partials/ContentElements/Tabs/
    }

    layoutRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Layouts/ContentElements/
        20 = EXT:kreativanttheme/Resources/Private/Layouts/ContentElements/
    }

    dataProcessing {
        10 = Kreativant\KreativantBase\DataProcessing\FlexFormProcessor
        20 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        20 {
            table = tx_kreativant_tabs
            pidInList.field = pid
            where {
                data = field:uid
                intval = 1
                wrap = tt_content=|
            }
            orderBy = sorting
            as = items
            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = image
                    as = images
                }
            }
        }
    }
}