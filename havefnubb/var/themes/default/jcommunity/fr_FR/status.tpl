<div id="login-status">
{ifuserconnected}
    Bienvenue {$login}.
    <ul>
        <li><a href="{jurl 'jcommunity~account:show', array('user'=>$login)}">votre compte</a></li>
        <li><a href="{jurl 'jcommunity~login:out'}">déconnexion</a></li>        
    </ul>
{else}
    Vous n'êtes pas connecté.
    <ul>
        <li><a href="{jurl 'jcommunity~login:index'}">Connexion</a></li>
        <li><a href="{jurl 'jcommunity~registration:index'}">S'inscrire</a></li>
        <li><a href="{jurl 'jcommunity~password:index'}">Mot de passe oublié</a></li>
    </ul>
{/ifuserconnected}
</div>

