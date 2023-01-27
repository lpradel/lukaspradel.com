<?php

if (App::getLocale() == "en") {
    $lang = "en-US";
    $lang_plain = "en";
} else {
    $lang = "de-DE";
    $lang_plain = "de";
}
?>

<!DOCTYPE html>
<html lang="<?=$lang?>" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>
        @section('title')
        @show
    </title>
    <meta name="description" content="Software engineer and consultant from Dortmund, Germany.">
    <meta name="author" content="Lukas Pradel">

    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:title" content="Lukas Pradel" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lukaspradel.com/" />
    <meta property="og:image" content="https://lukaspradel.com/images/me.jpg" />

    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-touch-icon-ipad-retina-152x152.png">


    <link href="/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="/css/font-awesome.min.css" media="all" rel="stylesheet">
    <link href="/css/style.combined.css" media="all" rel="stylesheet">
</head>

<body itemscope itemtype="http://schema.org/WebPage">
@section('main')
@show

<footer class="text-center">
    Copyright &copy; <?php
    $fromYear = 2014;
    $thisYear = (int)date('Y');
    echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');?> Lukas Pradel |
    <a href="@lang('routes.legal')?lang=<?=$lang_plain?>">
        @lang('index.menu-legal')
    </a> |
    @section('language-links')
    @show
</footer>

<script src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/jquery-polyglot.language.switcher.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.polyglot-language-switcher').polyglotLanguageSwitcher({
            selectedLang: function () {
                return ($('html').attr('lang')).replace(/-/g,"_");
            }
        });
    });
</script>

</body>

</html>