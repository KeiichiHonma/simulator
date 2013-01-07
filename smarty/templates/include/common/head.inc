<meta name="keywords" content="{$locale.keywords}" />
<meta name="description" content="{$locale.description}" />
<title>{$locale.title}</title>

<meta property="og:locale" content="{$og_locale}" />
<meta property="og:site_name" content="popApps" />
<meta property="og:title" content="{$locale.title}" />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://res.cloudinary.com/popapps/image/upload/icon128.png" />
<meta property="og:description" content="{$locale.description}" />
<meta property="og:url" content="{$smarty.const.SIMURL}{$smarty.server.REQUEST_URI}" />

<link rel="shortcut icon" href="{$path}favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="/css/global.css" />
<link href="/css/{if $smarty.const.LOCALE == $smarty.const.LOCALE_JA}ja.css{else}en.css{/if}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" media="all" href="/css/master.css" />
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/background_common.php" rel="stylesheet" type="text/css" media="all" />

