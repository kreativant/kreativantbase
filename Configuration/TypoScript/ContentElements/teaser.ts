tt_content.teaser = FLUIDTEMPLATE
tt_content.teaser {
    templateName = Teaser
    templateRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Templates/ContentElements/Teaser/
        20 = EXT:kreativanttheme/Resources/Private/Templates/ContentElements/Teaser/
    }

    partialRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Partials/ContentElements/Teaser/
        20 = EXT:kreativanttheme/Resources/Private/Partials/ContentElements/Teaser/
    }

    layoutRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Layouts/ContentElements/
        20 = EXT:kreativanttheme/Resources/Private/Layouts/ContentElements/
    }

    dataProcessing {
        10 = Kreativant\KreativantBase\DataProcessing\FlexFormProcessor
        20 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        20 {
            table = tx_kreativant_teaser
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