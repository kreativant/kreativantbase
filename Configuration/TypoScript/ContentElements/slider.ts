tt_content.slider = FLUIDTEMPLATE
tt_content.slider {
    templateName = Slider
    templateRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Templates/ContentElements/Slider/
        20 = EXT:kreativanttheme/Resources/Private/Templates/ContentElements/Slider/
    }

    partialRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Partials/ContentElements/Slider/
        20 = EXT:kreativanttheme/Resources/Private/Partials/ContentElements/Slider/
    }

    layoutRootPaths {
        10 = EXT:kreativantbase/Resources/Private/Layouts/ContentElements/
        20 = EXT:kreativanttheme/Resources/Private/Layouts/ContentElements/
    }

    dataProcessing {
        10 = Kreativant\KreativantBase\DataProcessing\FlexFormProcessor
        20 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        20 {
            table = tx_kreativant_slider
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

