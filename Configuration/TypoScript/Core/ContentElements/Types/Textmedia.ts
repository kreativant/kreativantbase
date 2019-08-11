###########################
### TEXTMEDIA TEMPLATES ###
###########################

tt_content.textmedia {

    templateName = TEXT
    templateName.stdWrap.cObject = CASE
    templateName.stdWrap.cObject {
        key.field = layout

        default = TEXT
        default.value = Textmedia
    }

}