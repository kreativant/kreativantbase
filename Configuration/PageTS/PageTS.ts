########################
#### Contentelements ###
########################
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/PageTS/ContentElements/Default.ts">


########################
#### Backendlayouts ####
########################
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:kreativantbase/Configuration/PageTS/BackendLayouts/Default.ts">

# Add ticked and crossed list styles
RTE.default.buttons.blockstyle.tags.ul.allowedClasses := addToList(list-cross, list-tick)

#ckEditor preset
RTE.default.preset = advanced

#################
#### TCEFORM ####
#################
TCEFORM {

    pages {
        backend_layout.removeItems = -1
        backend_layout_next_level.removeItems = -1
        layout.disabled = 1
    }


    tt_content {

        header_layout {

            addItems {
                101 = H1 Span
                102 = H2 Span
                103 = H3 Span
                104 = H4 Span
                105 = H5 Span
            }

            altLabels {
                1 = H1
                2 = H2
                3 = H3
                4 = H4
                5 = H5
                100 = Verbergen
                101 = H1 Span
                102 = H2 Span
                103 = H3 Span
                104 = H4 Span
                105 = H5 Span
            }
        }

        imagecols {
            removeItems = 5,6,7,8
        }

        imageorient {
            removeItems = 18,17,10,9,2,1
            disableNoMatchingValueElement = 1
        }

        space_before_class {
            removeItems = small, extra-small, medium, large, extra-large

            addItems {
                offset = Offset
                klein = Klein
                mittel = Mittel
                gross = Groß
            }
        }


        space_after_class {
            removeItems = small, extra-small, medium, large, extra-large

            addItems {
                klein = Klein
                mittel = Mittel
                gross = Groß
            }
        }


        frame_class {
            removeItems = ruler-before, ruler-after, indent, indent-left, indent-right, none

            disableNoMatchingValueElement = 1
        }

        layout {

            removeItems = 1, 2, 3

            types {

                textmedia.addItems {
                    60 = 50%
                    30 = 25%
                    40 = 33%
                    80 = 66%
                    90 = 75%
                }


            }

        }


    }
}
