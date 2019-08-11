config {

    filePathCss = EXT:kreativantbase/Resources/Public/Css/
    filePathJs = EXT:kreativantbase/Resources/Public/JavaScript/
    filePathScss = EXT:kreativantbase/Resources/Private/Scss/

    filePathTemplates = EXT:kreativantbase/Resources/Private/Templates/
    filePathPartials = EXT:kreativantbase/Resources/Private/Partials/
    filePathLayouts = EXT:kreativantbase/Resources/Private/Layouts/

}

/*
data {
    bookingPID = 31
    bookingPageFinishPID = 106
    bookingAnchorCID = 37
    onlineBookingPID = 32
}
*/

# customsubcategory=General=Allgemein

# cat=kreativant.Base/General/001; type=string; label=Logo: Dateiname des Logos, liegt in /fileadmin/Kundenbereich/
config.logo = logo.png

# cat=kreativant.Base/General/002; type=string; label=Base-URL: System BaseURL hier eintragen
config.baseUrl = http://p464937.mittwaldserver.info

# cat=kreativant.Base/General/003; type=int; label=Meta-Menü ID: Übergeordnete ID des Meta-Menü's
config.metaMenuPid = 9

# cat=kreativant.Base/General/004; type=boolean; label=LIVE: Setzt werte für die Live-Schaltung
config.live = 0

# cat=kreativant.Base/General/005; type=boolean; label=No-Cache: Aktiviert/deaktiveirt den Cache
config.no_cache = 1

# cat=kreativant.Base/General/006; type=color; label=META Themecolor: Für Android-Geräte - Google Chrome
config.theme_color = #174473


# customsubcategory=CookieConsent=Cookie-Hinweis

# cat=kreativant.Base/CookieConsent/001; type=options[bottom,bottom-left,top,bottom-right,top-pushdown]; label=Position: Position des Cookie-Hinweis
cookieConsent.position = bottom

# cat=kreativant.Base/CookieConsent/002; type=options[block,edgeless,classic]; label=Layout: Layout des Cookie-Hinweis
cookieConsent.layout = block

# cat=kreativant.Base/CookieConsent/003; type=string; label=Datenschutz-Link: Link zur Datenschutzerklärung ( z.B. /datenschutz )
cookieConsent.content.href = /datenschutz

# cat=kreativant.Base/CookieConsent/004; type=string; label=Nachricht: Nachricht des Cookie-Hinweis
cookieConsent.content.message = Um unsere Website für Sie optimal zu gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Durch die weitere Nutzung der Website stimmen Sie der Verwendung von Cookies zu.

# cat=kreativant.Base/CookieConsent/005; type=string; label=Button-Text: Text welcher im Button auftaucht
cookieConsent.content.dismiss = OK

# cat=kreativant.Base/CookieConsent/006; type=string; label=Datenschutz-Link Text: Verlinkter Text zur Datenschutzerklärung
cookieConsent.content.link = Zur Datenschutzerklärung.

# cat=kreativant.Base/CookieConsent/007; type=color; label=Cookie-Hinweis Farbe: Hintergrundfarbe des Cookie-Hinweis
cookieConsent.palette.background = #000000

# cat=kreativant.Base/CookieConsent/008; type=color; label=Text-Farbe: Farbe des Textes
cookieConsent.palette.text = #ffffff

# cat=kreativant.Base/CookieConsent/009; type=color; label=Button Farbe: Farbe des Buttons
cookieConsent.palette.button = #dbff00

# cat=kreativant.Base/CookieConsent/010; type=color; label=Button Textfarbe: Farbe des Buttontext
cookieConsent.palette.buttontext = #000000

