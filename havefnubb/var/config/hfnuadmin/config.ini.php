;<?php die(''); ?>
;for security reasons , don't remove or modify the first line

startModule=master_admin
startAction="default:index"

modulesPath="lib:jelix-admin-modules/,lib:jelix-modules/,app:modules/,app:../modules-hook/"

[coordplugins]
autolocale=autolocale.coord.ini.php
auth="hfnuadmin/auth.coord.ini.php"
jacl2="hfnuadmin/jacl2.coord.ini.php"

[responses]
html=adminHtmlResponse
htmlauth=adminLoginHtmlResponse

[acl2]
enableAcl2DbEventListener=on

[simple_urlengine_entrypoints]
hfnuadmin="jacl2db~*@classic jauth~*@classic jacl2db_admin~*@classic jauthdb_admin~*@classic master_admin~*@classic hfnuadmin~*@classic servinfo~default@classic hfnusearch~*@classic hfnucontact~*@classic servinfo~*@classic hfnuthemes~*@classic"


[logfiles]
DEBUG=havefnubbdebug.log

[modules]
jelix.access=2

master_admin.access=2
jacl2db_admin.access=2
jauthdb_admin.access=2

jacl2db.access=2
jacldb.access=0
jauth.access=2
jauthdb.access=2
jWSDL.access=0

havefnubb.access=1
hfnuadmin.access=2
hfnucal.access=2
hfnucontact.access=2
hfnuhardware.access=2
hfnuim.access=2
hfnuinstall.access=1
hfnurates.access=2
hfnusearch.access=1
hfnuthemes.access=1
jcommunity.access=1
jmessenger.access=1
jtags.access=1
servinfo.access=2

hook.access=1

