mod.wizards.newContentElement.wizardItems.kreativant {
    header = Benutzerdefinierte Elemente
    elements {

        slider {
            iconIdentifier = kreativanticon
            title = Slider
            description = Image- & Contentslider
            tt_content_defValues {
                CType = slider
            }
        }

        teaser {
            iconIdentifier = kreativanticon
            title = Teaser
            description = Horizontal, Slider, Vertikal, Masonry
            tt_content_defValues {
                CType = teaser
            }
        }

        accordion {
            iconIdentifier = kreativanticon
            title = Akkordeon
            description = Inhalt als Akkordeon
            tt_content_defValues {
                CType = accordion
            }
        }

        tabs {
            iconIdentifier = kreativanticon
            title = Tabs
            description = Inhalt als Tabs
            tt_content_defValues {
                CType = tabs
            }
        }

    }
    show := addToList(slider,teaser,accordion,tabs)
}


