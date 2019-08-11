tt_content.accordion = FLUIDTEMPLATE
tt_content.accordion {
    templateName = Accordion
    templateRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Templates/ContentElements/Accordion/
        20 = EXT:kreativanttheme/Resources/Private/Templates/ContentElements/Accordion/
    }

    partialRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Partials/ContentElements/Accordion/
        20 = EXT:kreativanttheme/Resources/Private/Partials/ContentElements/Accordion/
    }

    layoutRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Layouts/ContentElements/
        20 = EXT:kreativanttheme/Resources/Private/Layouts/ContentElements/
    }

    dataProcessing {
        10 = Kreativant\KreativantBase\DataProcessing\FlexFormProcessor
        20 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        20 {
            table = tx_kreativant_accordion
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