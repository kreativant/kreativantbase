lib.navigation.main = COA
lib.navigation.main {
    10 = HMENU
    10 {
        stdWrap.dataWrap =   <ul class="navbar-nav">|</ul>
        1 = TMENU
        1 {
            expAll = 1
            noBlur = 1
            NO = 1
            NO {
                ATagTitle.field = abstract // subtitle // description // title
                ATagBeforeWrap = 1
                wrapItemAndSub = <li class="nav-item">|</li>
                ATagParams = class="nav-link"
            }

            ACT < .NO
            ACT {
                wrapItemAndSub = <li class="nav-item active">|</li>
            }

            CUR < .ACT
            IFSUB < .NO
            IFSUB {
                wrapItemAndSub = <li class="nav-item dropdown">|<a href="#"class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">keyboard_arrow_down</i></a></li>
            }

            ACTIFSUB < .IFSUB
            ACTIFSUB {
                wrapItemAndSub = <li class="nav-item active dropdown active">|<a href="#"class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">keyboard_arrow_down</i></a></li>
            }

            CURIFSUB < .ACTIFSUB
        }

        2 < .1
        2 {
            wrap = <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">|</div>

            NO = 1
            NO {
                ATagTitle.field = abstract // subtitle // description // title
                ATagBeforeWrap = 1
                wrapItemAndSub = |
                ATagParams = class="dropdown-item"
            }

            ACT < .NO
            ACT {
                wrapItemAndSub = |
                ATagParams = class="dropdown-item active"
            }
            CUR < .ACT
            IFSUB < .NO
            IFSUB {
                ATagParams = class="dropdown-item"
                allWrap = <div class="dropdown-sub">|</div>
            }

            ACTIFSUB < .IFSUB
            ACTIFSUB {
                ATagParams = class="dropdown-item active"
                allWrap = <div class="dropdown-sub">|</div>
            }

            CURIFSUB < .ACTIFSUB

        }

        3 < .2
    }
}

lib.navigation.mega = COA
lib.navigation.mega {
    10 = HMENU
    10 {
        stdWrap.dataWrap =   <div class="navbar-collapse navbar-megamenu" id="navbarNav"><ul class="navbar-nav">|</ul></div>
        1 = TMENU
        1 {
            expAll = 1
            noBlur = 1
            NO = 1
            NO {
                ATagTitle.field = abstract // subtitle // description // title
                ATagBeforeWrap = 1
                wrapItemAndSub = <li class="nav-item">|</li>
                ATagParams = class="nav-link"
            }

            ACT < .NO
            ACT {
                wrapItemAndSub = <li class="nav-item active">|</li>
            }

            CUR < .ACT
            IFSUB < .NO
            IFSUB {
                allWrap = <span class="menu-item">|<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">arrow_forward</i></a></span>
                wrapItemAndSub = <li class="nav-item dropdown">|</li>
                ATagParams = class="nav-link"
            }

            ACTIFSUB < .IFSUB
            ACTIFSUB {
                allWrap = <span class="menu-item">|<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">arrow_forward</i></a></span>
                wrapItemAndSub = <li class="nav-item dropdown active">|</li>
                ATagParams = class="nav-link"
            }

            CURIFSUB < .ACTIFSUB
        }

        2 < .1
        2 {
            wrap = <div class="dropdown-menu"><a href="#" class="back-to-parent"><i class="material-icons">arrow_backwart</i> zurück</a><div class="mega-menu-inner-container">|</div></div>

            NO = 1
            NO {
                ATagTitle.field = abstract // subtitle // description // title
                ATagBeforeWrap = 1
                wrapItemAndSub = <div class="mega-menu-col">|</div>
                allWrap = <span class="menu-item">|</span>
                ATagParams = class="dropdown-item"
            }

            ACT < .NO
            ACT {
                wrapItemAndSub = |
                allWrap = <span class="menu-item">|</span>
                ATagParams = class="dropdown-item active"
            }
            CUR < .ACT
            IFSUB < .NO
            IFSUB {
                wrapItemAndSub = <div class="mega-menu-col">|</div>
                allWrap = <span class="menu-item">|</span>
                ATagParams = class="dropdown-item"
            }

            ACTIFSUB < .IFSUB
            ACTIFSUB {
                allWrap = <span class="menu-item">|</span>
                ATagParams = class="dropdown-item active"
            }

            CURIFSUB < .ACTIFSUB

        }

        3 < .2
        3 {
            wrap = <div class="dropdown-menu">|</div>

            NO.wrapItemAndSub = |
            NO.allWrap = |

            ACT.allWrap = |

            CUR.allWrap = |

            ACT.allWrap = |

            IFSUB.allWrap = |

            ACTIFSUB.allWrap = |

            CURIFSUB.allWrap = |
        }
    }
}

lib.navigation.breadcrumb = COA
lib.navigation.breadcrumb {
    required = 1
    10 = HMENU
    10 {
        special = rootline
        special.range = 1|-1
        1 = TMENU
        1 {
            wrap = <div class="site-breadcrumb"><div class="container"><ol class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList"></li>|</ol></div></div>
            NO = 1
            NO {
                wrapItemAndSub = <li property="itemListElement" typeof="ListItem">|</li>
                stdWrap.wrap = <span property="name">|</span>
                stdWrap.field = nav_title // title
                ATagTitle.field = nav_title // title
                ATagParams = property="item" typeof="WebPage"
                stdWrap.htmlSpecialChars = 1
                allStdWrap.insertData = 1
            }
            CUR < .NO
            CUR {
                wrapItemAndSub = <li class="active" property="itemListElement" typeof="ListItem">|</li>
                doNotLinkIt = 1
            }

            IFSUB < .NO
            IFSUB {
                doNotLinkIt = 1
            }

            ACTIFSUB < .IFSUB
            CURIFSUB < .ACTIFSUB
        }
    }
}

lib.navigation.metaMenu = COA
lib.navigation.metaMenu {
    10 = HMENU
    10.wrap = <ul class="meta-menu">|</ul>
    10.special = directory
    10.special.value = {$config.metaMenuPid}
    10.1 = TMENU
    10.1 {
        expAll = 0
        noBlur = 1
        NO = 1
        NO {
            linkWrap = <li>|</li>
            ATagTitle.field = subtitle // title
        }
    }

    // Seite drucken ins Meta-Menu einfÃ¼gen
    10.1.stdWrap {
        append < lib.printLink
    }
}
