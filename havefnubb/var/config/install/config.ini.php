;<?php die(''); ?>
;for security reasons , don't remove or modify the first line

startModule = "hfnuinstall"
startAction = "default:index"

[coordplugins]
hfnuinstalled="havefnubb/hfnuinstalled.coord.ini.php"
autolocale = autolocale.coord.ini.php
auth="havefnubb/auth.coord.ini.php"

[responses]
html = installHtmlResponse

[simple_urlengine_entrypoints]
install="hfnuinstall~*@classic"

[urlengine]
; name of url engine :  "simple" or "significant"
; engine=simple
; engine=basic_significant
engine=significant
enableParser=on
multiview=on
