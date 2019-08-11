 page.headerData.10000 = TEXT
 page.headerData.10000.value (
 <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "{$cookieConsent.palette.background}",
      "text": "{$cookieConsent.palette.text}"
    },
    "button": {
      "background": "{$cookieConsent.palette.button}",
      "text": "{$cookieConsent.palette.buttontext}"
    }
  },
  "theme": "{$cookieConsent.layout}",
  "position": "{$cookieConsent.position}",
  "content": {
    "message": "{$cookieConsent.content.message}",
    "dismiss": "{$cookieConsent.content.dismiss}",
    "link": "{$cookieConsent.content.link}",
    "href": "{$config.baseUrl}{$cookieConsent.content.href}"
  }
})});
</script>
 )