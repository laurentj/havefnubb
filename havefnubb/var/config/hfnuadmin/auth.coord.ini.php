;;<?php die(''); ?>
;for security reasons , don't remove or modify the first line

;============= Main parameters

; driver name : "Db", "Class" or "LDS" (respect the case of characters)
driver=Db

;============ Parameters for the plugin
; session variable name
session_name=HFNUBB

; Says if there is a check on the ip address : verify if the ip
; is the same when the user has been connected
secure_with_ip=0

;Timeout. After the given time (in minutes) without activity, the user is disconnected.
; If the value is 0 : no timeout
timeout=0

; If the value is "on", the user must be authentificated for all actions, except those
; for which a plugin parameter  auth.required is false
; If the value is "off", the authentification is not required for all actions, except those
; for which a plugin parameter  auth.required is true
auth_required=on

; What to do if an authentification is required but the user is not authentificated
; 1 = generate an error. This value should be set for web services (xmlrpc, jsonrpc...)
; 2 = redirect to an action
on_error=2

; locale key for the error message when on_error=1
error_message="jauth~autherror.notlogged"

; action to execute on a missing authentification when on_error=2
on_error_action = "jauth~login:out"

; action to execute when a bad ip is checked with secure_with_ip=1 and on_error=2
bad_ip_action = "jauth~login:out"


;=========== Parameters for jauth module

; number of second to wait after a bad authentification
on_error_sleep=3

; action to redirect after the login
; after_login="master_admin~default:index"
after_login="hfnuadmin~default:index"


; action to redirect after a logout
; after_logout="jauth~login:form"
after_logout="havefnubb~default:index"

; says if after_login can be overloaded by a "auth_url_return" parameter in the url/form for the login
enable_after_login_override=off

; says if after_logout can be overloaded by a "auth_url_return" parameter in the url/form for the login
enable_after_logout_override=off

;============ Parameters for the persistance of the authentification

; enable the persistance of the authentification between two sessions
persistant_enable=on

; key to use to crypt the password in the cookie. replace it by your own words !
persistant_crypt_key=HaV3FnUw1thY0uRw3bs1t34dfm1n

; the name of the cookie which is used to store data for the authentification
persistant_cookie_name=HFNUAuthentificationCookie

; duration of the validity of the cookie (in days). default is 1 day.
persistant_duration=1

; base path for the cookie. If empty, it uses the basePath value from the main configuration.
persistant_cookie_path=

;=========== Parameters for drivers

;------- parameters for the "Db" driver
[Db]
; name of the dao to get user data
; dao="jauth~jelixuser"
dao="havefnubb~member"

; profile to use for jDb 
profile=

; name of the php function to crypt the password in the database
password_crypt_function=md5


; name of the form for the jauthdb_admin module
; form="jauthdb_admin~jelixuser"
form="hfnuadmin~user_admin"

; path of the directory where to store files uploaded by the form (jauthdb_admin module)
; should be related to the var directory of the application
uploadsDirectory=

;------- parameters for the "Class" driver
[Class]
; selector of the class
class=

; name of the php function to crypt the password in the database
password_crypt_function=md5

;------- parameters for the "LDS" driver
[LDS]



