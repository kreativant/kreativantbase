

page.10 = FLUIDTEMPLATE
page.10 {

    templateName = TEXT
    templateName.stdWrap.cObject = CASE
    templateName.stdWrap.cObject {
        key.data = pagelayout

        pagets__start01 = TEXT
        pagets__start01.value = Start01

        default = TEXT
        default.value = Default
    }
    
    templateRootPaths {
        10 = {$config.filePathTemplates}Page/
        20 = EXT:kreativanttheme/Resources/Private/Templates/Page/
    }

    partialRootPaths {
        10 = {$config.filePathPartials}Page/
        20 = EXT:kreativanttheme/Resources/Private/Partials/Page/
    }

    layoutRootPaths {
        10 = {$config.filePathLayouts}Page/
        20 = EXT:kreativanttheme/Resources/Private/Layouts/Page/
    }

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
        10 {
            levels = 2
            includeSpacer = 1
            as = mainnavigation
        }
        20 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
        20 {
            entryLevel = 1
            levels = 2
            expandAll = 0
            includeSpacer = 1
            as = subnavigation
        }
        30 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
        30 {
            special = rootline
            special.range = 0|-1
            includeNotInMenu = 1
            as = breadcrumb
            if {
                value = {$page.theme.breadcrumbEnableLevel}
                value {
                    insertData = 1
                    prioriCalc = 1
                    stdWrap.wrap = |-1
                }
                isGreaterThan {
                    data = level
                }
            }
        }
        40 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
        40 {
            special = language
            special.value = {$page.theme.language.languageValue}
            as = languagenavigation
            if {
                isTrue = {$page.theme.language.languageValue}
            }
        }
        50 = TYPO3\CMS\Frontend\DataProcessing\MenuProcessor
        50 {
            special = {$page.theme.meta.navigationType}
            special.value = {$page.theme.meta.navigationValue}
            includeNotInMenu = {$page.theme.meta.includeNotInMenu}
            as = metanavigation
            if {
                isTrue = {$page.theme.meta.navigationValue}
            }
        }
    }




    variables {
        baseURL = TEXT
        baseURL.data = getIndpEnv : HTTP_HOST

        pageTitle = TEXT
        pageTitle.data = page:title

        siteTitle = TEXT
        siteTitle.data = TSFE:tmpl|setup|sitetitle

        templateName = TEXT
        templateName < page.10.templateName.stdWrap.cObject

        copyright = TEXT
        copyright {
            dataWrap = © {date:Y} {TSFE:tmpl|setup|sitetitle}
        }

        logo = TEXT
        logo.value = {$config.logo}

        bookingPage = TEXT
        bookingPage.value = {$data.bookingPID}

        bookingPageFinish = TEXT
        bookingPageFinish.value = {$data.bookingPageFinishPID}

        onlineBookingPage = TEXT
        onlineBookingPage.value = {$data.onlineBookingPID}

        bookingAnchor = TEXT
        bookingAnchor.value = {$data.bookingAnchorCID}
    }

}

