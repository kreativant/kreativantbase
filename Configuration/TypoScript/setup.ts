page = PAGE
page {
    typeNum = 0
    shortcutIcon = favicon.ico

    config {
        pageTitleFirst = 1
        linkVars = L
        renderCharset = utf-8
        metaCharset = utf-8
        doctype = html5
        removeDefaultJS = external
        inlineStyle2TempFile = 1
        admPanel = 1
        debug = 0
        no_cache = {$config.no_cache}
        cache_period = 2592000
        cache_clearAtMidnight = 0
        sendCacheHeaders = 1
        intTarget =
        extTarget =
        headerComment = Erstellt durch kreativant.de

        content_from_pid_allowOutsideDomain = 0

        // Realurl
        tx_realurl_enable = 1
        simulateStaticDocuments = 0
        baseURL = {$config.baseUrl}

        // Image scaling
        noScaleUp = 1

        // Languagesettings
        sys_language_uid = 0
        sys_language_overlay = 1
        sys_language_mode = content_fallback
        language = de
        locale_all = de_DE.UTF-8
        htmlTag_setParams = lang="de" dir="ltr" class="no-js"

        // Compression css & js
        compressJs = {$config.live}
        compressCss = {$config.live}
        concatenateJs = {$config.live}
        concatenateCss = {$config.live}
    }

    // Includes
    includeCSS {
        fontAwesome = {$config.filePathCss}IconFonts/FontAwesome/font-awesome.min.css
        custom = {$config.filePathScss}custom.scss
        custom.outputdir = {$config.filePathCss}
    }

    includeJSLibs {
        jquery = {$config.filePathJs}jquery.min.js
        // modernizr = {$config.filePathJs}modernizr.min.js
    }

    includeJSFooterlibs {
        popper = {$config.filePathJs}Bootstrap/popper.min.js
        bootstrap = {$config.filePathJs}Bootstrap/bootstrap.min.js
    }

    // meta
    meta {
        viewport = width=device-width, initial-scale=1, user-scalable=no
        robots = noindex, nofollow
        google = notranslate
        apple-mobile-web-app-capable = no

        description.data                    = page:description
        description.ifEmpty.data            = levelfield :-1, description, slide

        keywords.data                       = page:keywords
        keywords.ifEmpty.data               = levelfield :-1, keywords, slide

        author.data                         = page:author
        author.ifEmpty.data                 = levelfield : -1,author, slide

        X-UA-Compatible                     = IE=edge
        X-UA-Compatible.httpEquivalent      = 1

        og:title {
            attribute                       = property
            field                           = title
        }

        og:site_name {
            attribute                       = property
            data                            = TSFE:tmpl|setup|sitetitle
        }

        og:description {
            attribute                       = property
            data                            = page:description
        }

        og:url {
            attribute                       = property
            stdWrap.cObject = TEXT
            stdWrap.cObject {
                stdWrap.typolink.parameter.data     = TSFE:id
                stdWrap.typolink.forceAbsoluteUrl   = 1
                stdWrap.typolink.returnLast         = url
                stdWrap.typolink.addQueryString     = 1
                stdWrap.typolink.addQueryString.method = GET
            }
        }

        og:image {
            attribute = property
            stdWrap.cObject = FILES
            stdWrap.cObject {
                references {
                    data = levelfield:-1, media, slide
                }
                maxItems = 1
                renderObj = COA
                renderObj {
                    10 = IMG_RESOURCE
                    10 {
                        file {
                            import.data = file:current:uid
                            treatIdAsReference = 1
                            width = 1280c
                            height = 720c
                        }
                        stdWrap {
                            typolink {
                                parameter.data = TSFE:lastImgResourceInfo|3
                                returnLast = url
                                forceAbsoluteUrl = 1
                            }
                        }
                    }
                }
            }
        }



    }

    headerData.1000 = TEXT
    headerData.1000 {
        stdWrap.typolink.parameter.data     = TSFE:id
        stdWrap.typolink.forceAbsoluteUrl   = 1
        stdWrap.typolink.returnLast         = url
        stdWrap.typolink.addQueryString     = 1
        stdWrap.typolink.addQueryString.method = GET
        htmlSpecialChars                    = 1
        wrap                                = <link href="|" rel="canonical" />
    }

    headerData.2000 = TEXT
    headerData.2000.value = <meta name="theme-color" content="{$config.theme_color}" />

}

#################
#### HELPERS ####
#################
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/TypoScript/Helper/DynamicContent.ts">


#######################
#### PAGETEMPLATES ####
#######################
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/TypoScript/Core/Pagetemplates.ts">


###############
#### MENUS ####
###############
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/TypoScript/Core/Menu.ts">


// We need a big header-img, lets override maxImageWidth in content..
lib.content.20.maxImageWidth = CASE
lib.content.20.maxImageWidth {
    key.field = colPos
    ## Col-ID 0
    0 = TEXT
    0.value = 9999
}
// ...and override biggest responsive-image-src
tt_content.image.20.1.sourceCollection.bigger.width = CASE
tt_content.image.20.1.sourceCollection.bigger.width {
    key.field = colPos
    ## Col-ID 0
    0 = TEXT
    0.value = 9999
}

############################
### Fluid Styled Content ###
############################

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/TypoScript/Core/ContentElements/FluidStyledContent.ts" >

#######################
### ContentElements ###
#######################

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/TypoScript/ContentElements/contentelements.ts" >


######################
### Cookie Consent ###
######################
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/TypoScript/Core/CookieConsent.ts" >
