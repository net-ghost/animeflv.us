<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
	
  
}else{
	header("Location: index");
}
?>

<?php


$new = file_get_contents('https://api.themoviedb.org/3/movie/top_rated?api_key=09dfbe2a64e3af2d7fe4bef6a6bab92f');
$new = json_decode($new, true)['results'];
$popular = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=09dfbe2a64e3af2d7fe4bef6a6bab92f');
$popular = json_decode($popular, true)['results'];
$upcoming = file_get_contents('https://api.themoviedb.org/3/movie/upcoming?api_key=09dfbe2a64e3af2d7fe4bef6a6bab92f');
$upcoming = json_decode($upcoming, true)['results'];
$upcomings = file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=09dfbe2a64e3af2d7fe4bef6a6bab92f');
$upcomings = json_decode($upcomings, true)['results'];
//print_r($new);
?>

<html lang="es">
<head><title>Sertheny</title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/akiraClient.css">
	<link rel="shortcut icon" href="images/icons/favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script  src="js/owlcarousel.js"></script>
	<style

     data-emotion-ltr="h73cpj">.ltr-h73cpj{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-appearance:none;-moz-appearance:none;appearance:none;border:0;border-radius:4px;cursor:pointer;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;opacity:1;padding:0.8rem;position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;will-change:background-color,color;word-break:break-word;white-space:nowrap;}.ltr-h73cpj.color-primary{background-color:white;color:black;}.ltr-h73cpj.color-primary:not(:disabled):hover{background-color:rgba(255,255,255,0.7);}.ltr-h73cpj.color-primary:not(:disabled):active{background-color:rgba(255,255,255,0.4);color:rgba(0,0,0,0.7);}.ltr-h73cpj.color-primary:disabled{background-color:rgba(255,255,255,0.4);color:rgba(0,0,0,0.4);}.ltr-h73cpj.color-secondary{background-color:rgba(109,109,110,0.7);color:white;}.ltr-h73cpj.color-secondary:not(:disabled):hover{background-color:rgba(109,109,110,0.4);}.ltr-h73cpj.color-secondary:not(:disabled):active{background-color:rgba(109,109,110,0.4);color:rgba(255,255,255,0.7);}.ltr-h73cpj.color-secondary:disabled{background-color:rgba(109,109,110,0.4);color:rgba(255,255,255,0.4);}.ltr-h73cpj.color-tertiary{background-color:transparent;color:white;}.ltr-h73cpj.color-tertiary:not(:disabled):hover{background-color:rgba(255,255,255,0.1);}.ltr-h73cpj.color-tertiary:not(:disabled):active{background-color:rgba(255,255,255,0.1);color:rgba(255,255,255,0.7);}.ltr-h73cpj.color-tertiary:disabled{color:rgba(255,255,255,0.4);}.ltr-h73cpj.hasLabel{padding-left:2.4rem;padding-right:2.4rem;}.ltr-h73cpj.hasIcon{padding-left:1.6rem;padding-right:1.6rem;}.ltr-h73cpj.hasLabel.hasIcon{padding-left:2rem;padding-right:2.4rem;}.ltr-h73cpj:disabled{cursor:default;}.ltr-h73cpj:not(:disabled):focus{outline:none;}.ltr-h73cpj:not(:disabled):focus::before{box-sizing:content-box;content:'';display:block;height:100%;width:100%;border:2px solid white;border-radius:8px;padding:2px;position:absolute;left:-4px;}.ltr-h73cpj::-moz-focus-inner{border:none;}</style><style data-emotion-ltr="1e4713l">.ltr-1e4713l{line-height:0;}</style><style data-emotion-ltr="sar853">.ltr-sar853{display:inline-block;}.ltr-sar853.large{height:3.8rem;width:3.8rem;}.ltr-sar853.medium{height:2.4rem;width:2.4rem;}.ltr-sar853.small{height:1.8rem;width:1.8rem;}.ltr-sar853 svg{height:100%;width:100%;}</style><style data-emotion-ltr="1i33xgl">.ltr-1i33xgl{box-sizing:border-box;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;height:100%;position:relative;width:100%;}</style><style data-emotion-ltr="1yex7m3">.ltr-1yex7m3{display:block;font-size:1.6rem;font-weight:bold;line-height:2.4rem;}</style><style data-emotion-ltr="14hip7q">.ltr-14hip7q{font-family:'Netflix Sans','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:1.6rem;font-weight:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;display:block;font-size:1.6rem;font-weight:bold;line-height:2.4rem;}</style><style id="__web-inspector-hide-shortcut-style__">.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after{    visibility: hidden !important;}.title-card .boxart-container img{height: 100%;}.color-primary{background-color: white;color: black;}.ltr-v8pdkb.hasLabel {padding-left: 2.4rem;padding-right: 2.4rem;}.ltr-v8pdkb.hasIcon {padding-left: 1.6rem;padding-right: 1.6rem;}.ltr-v8pdkb {-webkit-align-items: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-appearance: none;-moz-appearance: none;appearance: none;border: 0;border-radius: 4px;cursor: pointer; display: -webkit-box;display: -webkit-flex; display: -ms-flexbox;display: flex;-webkit-box-pack: center;-webkit-justify-content: center;-ms-flex-pack: center;justify-content: center;opacity: 1; padding: 0.8rem;position: relative;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;will-change: background-color,color;word-break: break-word;white-space: nowrap;}.ltr-v8pdkb.color-primary {background-color: white;color: black;}.ltr-12gj2pn.medium { height: 2.4rem; width: 2.4rem;}.ltr-12gj2pn {display: -webkit-box;display: -webkit-flex; display: -ms-flexbox; display: flex;-webkit-align-items: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-pack: center;-webkit-justify-content: center;-ms-flex-pack: center; justify-content: center;}.ltr-12gj2pn svg {height: 100%;width: 100%;}.ltr-zd4xih {font-family: 'Netflix Sans','Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 1.6rem;font-weight: normal;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;display: block;font-size: 1.6rem;font-weight: bold;line-height: 2.4rem;}.ltr-v8pdkb.color-secondary { background-color: rgba(109,109,110,0.7);color: white;}.ltr-v8pdkb.color-secondary:not(:disabled):hover {background-color: rgba(109,109,110,0.4);}.ltr-v8pdkb.color-primary:not(:disabled):hover {
    background-color: rgba(255,255,255,0.75);}.splash-screen h1{position: absolute;bottom: 5%;left: 50%;transform: translateX(-50%);width: 75%;text-align: center;color: white;}.splash-screen{z-index: 100;position: absolute;top: 0;left: 0;width: 100%;height: 100%;background: url(app/images/backgrounds/splash_background.jpg) repeat center center;background-size: cover;}.splash-screen div {width: 100%;height: 100%;background: url(app/images/logo/app_logo.svg) no-repeat center center;background-size: 35% auto;z-index: 1;}.type-subtitle2{z-index: 100;font-weight: 400;font-size: 16px;line-height: 22px;}.prom-x{z-index: 999; display: block;position: relative;width: 100%;height: 100%;}.al-x{position: absolute;top: 60%;left: 50%;transform: translateX(-50%); color: #2196f3;}.al-x span{font-size: 3vw;background: #031321;padding: 10px;cursor: pointer;}.ltr-pjs1vp.color-supplementary {background-color: transparent;border: 1px solid rgba(255, 255, 255, 0.7);color: white;}.ltr-pjs1vp.hasIcon {    padding-left: 0.8rem;padding-right: 0.8rem;}.ActionButtons div button {margin: .35rem 0;}.ltr-pjs1vp {-webkit-box-align: center;align-items: center;appearance: none;border: 0px;cursor: pointer;display: flex;-webkit-box-pack: center;justify-content: center;opacity: 1;padding: 0.8rem;position: relative;user-select: none;will-change: background-color, color;word-break: break-word;white-space: nowrap;border-radius: 50%;}.ltr-pjs1vp.color-supplementary:not(:disabled):hover {background-color: rgba(255, 255, 255, 0.7);}.ltr-1ksxkn9 {line-height: 0;}.ltr-12gj2pn.small {height: 1.8rem;width: 1.8rem;}.ltr-12gj2pn svg {height: 100%;width: 100%;}
</style></head>


<body>
	<div id="appMountPoint"><div class="netflix-sans-font-loaded"><div dir="ltr" class=""><div><div class="bd dark-background"  data-uia="container-adult">

		<div class="pinning-header">
			<div class="pinning-header-container" style="top: 0px; position: fixed; background: transparent;">
		<div class="main-header has-billboard menu-navigation" ><a class="web-x"  href="/"><img src="img/logo-ico.png"></a><ul class="tabbed-primary-navigation"><li class="navigation-menu"><a class="menu-trigger">Explorar</a><div class="sub-menu theme-lakira" style="opacity: 1; display: none; transition-duration: 150ms;"><div class="callout-arrow"></div><div class="topbar"></div><ul class="sub-menu-list"><li class="sub-menu-item"><a class="current active" href="/browse">Inicio</a></li><li class="sub-menu-item"><a href="/browse/genre/83">Series</a></li><li class="sub-menu-item"><a href="/browse/genre/34399">Películas</a></li><li class="sub-menu-item"><a href="/latest">Novedades populares</a></li><li class="sub-menu-item"><a href="/browse/my-list">Mi lista</a></li></ul></div></li><li class="navigation-tab"><a class="current active" href="/browse">Inicio</a></li><li class="navigation-tab"><a href="" class="menu-trigger">Series</a></li><li class="navigation-tab"><a href="/browse/genre/34399">Películas</a></li><li class="navigation-tab"><a href="/latest">Novedades populares</a></li><li class="navigation-tab"><a href="/browse/my-list">Mi lista</a></li></ul><div class="secondary-navigation">
		<div class="nav-element"><div class="searchBox"><button class="searchTab" tabindex="0" aria-label="Buscar" data-uia="search-box-launcher"><span class="icon-search"></span></button></div></div><div class="nav-element show-kids"><a href="titles/niños">NIÑOS</a></div><div class="nav-element"><span class="notifications"><button class="notifications-menu" aria-haspopup="true" aria-expanded="false" aria-label="Notificaciones"><span class="icon-button-notification"></span></button></span> </div><div class="nav-element op"><div class="account-menu-item"><div class="account-dropdown-button"><a role="button" tabindex="0" aria-haspopup="true" aria-expanded="false" aria-label="judith - Cuenta y configuración"><span class="profile-link" role="presentation"><img class="profile-icon" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7220282733C487DE47C3EEAFFFE3C9AAA39C135CA84DBC2D54FFE913B418D9E6/scale?width=280&format=png" alt=""></span></a><span class="caret" role="presentation"></span></div><div class="account-drop-down sub-menu theme-lakira" style="opacity: 1; transition-duration: 150ms;display: none;"><div class="ptrack-content" data-ui-tracking-context="%7B%22appView%22:%22accountDropdownPanel%22%7D" data-tracking-uuid="5eb7a95b-809e-44e6-a150-7ea0ae1dd47f"><div class="topbar"></div><ul class="sub-menu-list profiles" role="list" aria-label="Perfiles"><li class="sub-menu-item profile" role="listitem"><div><a class="profile-link" tabindex="0" href="/SwitchProfile?tkn=O7LMPO4JZBCAPNRSDERVALNBEE" data-uia="action-select-profile+primary"><div class="avatar-wrapper"><img class="profile-icon" src="https://occ-0-1194-116.1.nflxso.net/dnm/api/v6/K6hjPJd6cR6FpVELC5Pd6ovHRSk/AAAABSyK56KfhrsOYKS2J4gJiPMXedtbHdo5DTiJHACZpRmG-nwy9BvtrWMjlbQSEuziS0WWVrmInJD1p6xPgnOZQYs.png?r=535" alt=""></div><span class="profile-name">Nahomi</span></a><div class="profile-children"></div></div></li><li class="sub-menu-item profile" role="listitem"><div><a class="profile-link" tabindex="0" href="/SwitchProfile?tkn=UHASN4AZT5GBZJE63V6KD2LNOY" data-uia="action-select-profile+secondary"><div class="avatar-wrapper"><img class="profile-icon" src="https://occ-0-1194-116.1.nflxso.net/dnm/api/v6/K6hjPJd6cR6FpVELC5Pd6ovHRSk/AAAABW2cSR7dJSljX4BSVXbW9KLvBPFs0y_uaZxOO_vYRqHWYoSDgz5GGaNALsoZtlAgYFmr6kZE0lyoJIUNlO7ifQc.png?r=42f" alt=""></div><span class="profile-name">Yuly</span></a><div class="profile-children"></div></div></li><li class="sub-menu-item profile" role="listitem"><div><a class="profile-link" tabindex="0" href="/SwitchProfile?tkn=P7RWLM756ZHOBPRZKUFM2WKQK4" data-uia="action-select-profile+secondary"><div class="avatar-wrapper"><img class="profile-icon" src="https://occ-0-1194-116.1.nflxso.net/dnm/api/v6/K6hjPJd6cR6FpVELC5Pd6ovHRSk/AAAABWEE_3qAhYLrZINhU6fkrvOi3KTn4zh43C5sISOVwNisgX-mRxJJIVpZgAoKVOjAIH9mp6IiC9NQIC1h1D484ZA.png?r=f80" alt=""></div><span class="profile-name">Jose</span></a><div class="profile-children"></div></div></li><li class="sub-menu-item profile" role="listitem"><div><a class="profile-link" tabindex="0" href="/SwitchProfile?tkn=LKERSPV7ZBDI3IYLQLYWYWSN2Y" data-uia="action-select-profile+secondary"><div class="avatar-wrapper"><img class="profile-icon" src="https://occ-0-1194-116.1.nflxso.net/dnm/api/v6/K6hjPJd6cR6FpVELC5Pd6ovHRSk/AAAABTzAFu3q504mAD1-cNpjzjspnr5pkwKbsE3z8_-0uwV6Xv1vqncbF4pjKIQlcuW8wCNUM_eUZ00Ry7y5ceEQWFk.png?r=b4f" alt=""></div><span class="profile-name">Miguel</span></a><div class="profile-children"></div></div></li><li class="sub-menu-item profile-link" role="listitem"><a aria-label="Administrar perfiles" class="sub-menu-link" href="/profiles/manage">Administrar perfiles</a></li></ul><ul class="sub-menu-list responsive-links"></ul><ul class="account-links sub-menu-list" aria-label="Cuenta"><li class="sub-menu-item"><a class="sub-menu-link" href="/YourAccount">Cuenta</a></li><li class="sub-menu-item"><a class="sub-menu-link" href="https://help.netflix.com/">Centro de ayuda</a></li><li class="sub-menu-item"><a class="sub-menu-link" href="/SignOut?lnkctr=mL">Cerrar sesión en Netflix</a></li></ul></div></div>

	</div>
</div></div></div></div></div>



<!--  HEADER -->                                                                                     
	

		<div class="mainView"  role="main"><div class="lolomo is-fullbleed"><h1 class="visually-hidden" >Inicio de Anime crudfire</h1><span class="volatile-billboard-animations-container"><div class="billboard-row" role="region" aria-label="Contenido destacado"><div class="ptrack-container billboard-presentation-tracking"><div class="billboard-presentation-tracking ptrack-content"><div class="billboard-presentation-tracking ptrack-content" ><div class="billboard billboard-pane billboard-pane-main billboard-originals full-bleed-billboard trailer-billboard"><div class="billboard-motion dismiss-mask bg-video"><style>#bg-video2{display: none;}.info-wrapper2{display: none;}.titleWrapper2{display: none;}#bg-video1{display: none;}.info-wrapper1{display: none;}.titleWrapper1{display: none;} video{ width: 100%;position: absolute;top:0;left: 0;right: 0;bottom: 0;}.hero-image-wrapper1{display: none;}</style>
            <video id="bg-video" autoplay="" muted="" >
                <source src="https://piohqwblwu.mstreamcdn.com/e/eyJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2MTMxNDA0ODQsImRhdGEiOlsiMjgwMDoyMDA6ZTI5MDo2OWZhOjc1M2U6MTQ1ZTphNzNjOjU5OGUiLCI2dWNtNWkwZ3Nsc3MiLCJuIiwyLCI4MThjOTRkMzgwZWJjYzU5MzhmMzAzZGJmZmM3MjgwYiJdfQ.JqpGTPk7vfLHgp8rKdE5FnQOORVxF6kkkQ0xhlOx9D4.mp4" type="video/mp4">
            </video>
        <div class="motion-background-component bottom-layer full-screen"><div class="hero-image-wrapper"><img class="hero static-image image-layer" src="https://oespectadorrabugentoblog.files.wordpress.com/2019/04/wp1898450.png" alt="Food Wars!: Shokugeki no Soma"></div><div class="embedded-components button-layer"><span class="ActionButtons"><button class="color-supplementary hasIcon ltr-pjs1vp"><div class="ltr-1ksxkn9"><div class="small ltr-12gj2pn "><i class="fas fa-volume-up"></i>
            <style>.small .fa-volume-mute{display: none;}.small .fa-redo-alt{display: none;}</style><i class="fas fa-volume-mute"></i><i class="fas fa-redo-alt"></i></div>
            </div></button></span><span class="maturity-rating "><span class="maturity-number">16+</span></span></div></div></div><div class="fill-container"><div class="info meta-layer"><div class="logo-and-text meta-layer"><div class="titleWrapper" style="transform-origin: left bottom; transform: scale(1) translate3d(0px, 0px, 0px); transition-duration: 3s; transition-delay: 0ms;"><div class="billboard-title"><img class="title-logo" src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABQiZHI7LHTmZXahpA4KtKH3dY5EiVpcBpjqRu-IhoTc-OuSNu4V72OokeVdI-cKv9H0y1_5VyxPM4mqbjRbvhX2SbnDGQQvEJG0.webp?r=45a" title="Food Wars!: Shokugeki no Soma" alt="Food Wars!: Shokugeki no Soma"></div></div><div class="info-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 2s; transition-delay: 0ms; opacity: 1;"><div class="info-wrapper-fade" style="opacity: 1; transition-duration: 600ms; transition-delay: 200ms;"><div class="episode-title-container"></div><div class="synopsis-fade-container"><div class="synopsis no-supplemental"> <!-- -->El joven chef Soma ingresa en la prestigiosa Academia Culinaria Tōtsuki, donde debe salir victorioso en batallas de cocina fuera de este mundo o afrontar su expulsión.<!-- --> </div></div>
        </div></div><div class="billboard-links button-layer forward-leaning"><a data-uia="play-button" role="link" aria-label="Reproducir" class=" playLink isToolkit" href=""><button class="color-primary hasLabel hasIcon ltr-v8pdkb" tabindex="-1" type="button"><div class="ltr-1ksxkn9"><div class="medium ltr-12gj2pn" role="presentation"><svg viewBox="0 0 24 24"><path d="M6 4l15 8-15 8z" fill="currentColor"></path></svg></div></div><div class="ltr-1i33xgl" style="width:1rem"></div><span class="ltr-zd4xih">Reproducir</span></button></a><button class="color-secondary hasLabel hasIcon ltr-v8pdkb" data-uia="billboard-more-info" type="button"><div class="ltr-1ksxkn9"><div class="medium ltr-12gj2pn" role="presentation"><svg viewBox="0 0 24 24"><path d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10zm-2 0a8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8zm-9 6v-7h2v7h-2zm1-8.75a1.21 1.21 0 0 1-.877-.364A1.188 1.188 0 0 1 10.75 8c0-.348.123-.644.372-.886.247-.242.54-.364.878-.364.337 0 .63.122.877.364.248.242.373.538.373.886s-.124.644-.373.886A1.21 1.21 0 0 1 12 9.25z" fill="currentColor"></path></svg></div></div><div class="ltr-1i33xgl" style="width:1rem"></div><span class="ltr-zd4xih">Más información</span></button></div></div></div></div></div></div></div></div></div></span>




<!-- 1 -->
<div class="lolomoRow lolomoRow_title_card originals-panels-row" data-list-context="netflixOriginals"><h2 class="rowHeader"><a class="rowTitle originals-row-title"><div class="row-header-title">Top rated</div><div class="aro-row-header"><div class="see-all-link">Ver todos</div><div class="aro-row-chevron icon-akiraCaretRight"></div></div></a></h2><div class="rowContainer rowContainer_title_card"><div class="ptrack-container"><div class="rowContent slider-hover-trigger-layer"><div class="slider"><span class="handle handlePrev pagina_prev active" tabindex="0" role="button" aria-label="Ver títulos anteriores"><b class="indicator-icon icon-leftCaret"></b></span><div class="sliderMask showPeek "  ><div id="genr_actualizado">


<?php foreach ($new as $movie){
echo '<div class="slider-item slider-item-0"><div class="title-card-container"><div id="title-card-6-0" class="slider-refocus title-card title-card-tall-panel"><div class="ptrack-content"><div class="boxart-size-16x9 boxart-container boxart-rounded"></div><div class="boxart-size-1x2 boxart-tall-panel boxart-container"><img class="boxart-image-tall boxart-image-in-padded-container" src="https://image.tmdb.org/t/p/w185'.$movie['poster_path'].'" alt="'.$movie['title'].'"></div></div><a href="peliculas?id='.$movie['id'].'"><div class="bob-container"><span></span></div></a></div></div></div>';
}?>


</div><span class="handle handleNext pagina_next active" aria-label="Ver más títulos"><b class="indicator-icon icon-rightCaret"></b></span>
</div></div></div></div></div></div>
<!-- 1 -->


<!-- 2 -->
<div class="lolomoRow lolomoRow_title_card originals-panels-row" data-list-context="netflixOriginals"><h2 class="rowHeader"><a aria-label="originales de Anime Onegai" class="rowTitle originals-row-title" href="/browse/genre/839338"><div class="row-header-title">Popular</div><div class="aro-row-header"><div class="see-all-link">Ver todos</div><div class="aro-row-chevron icon-akiraCaretRight"></div></div></a></h2><div class="rowContainer rowContainer_title_card" id="row-6 "><div class="ptrack-container" ><div class="rowContent slider-hover-trigger-layer"><div class="slider" ><span class="handle handlePrev pagina_prev1 active" tabindex="0" role="button" aria-label="Ver títulos anteriores"><b class="indicator-icon icon-leftCaret"></b></span><div class="sliderMask showPeek "  ><div id="genr_actualizado1">



<?php foreach ($popular as $movie){
echo '<div class="slider-item slider-item-0"><div class="title-card-container"><div id="title-card-6-0" class="slider-refocus title-card title-card-tall-panel"><div class="ptrack-content"><div class="boxart-size-16x9 boxart-container boxart-rounded"></div><div class="boxart-size-1x2 boxart-tall-panel boxart-container"><img class="boxart-image-tall boxart-image-in-padded-container" src="https://image.tmdb.org/t/p/w185'.$movie['poster_path'].'" alt="'.$movie['title'].'"></div></div><a href="peliculas?id='.$movie['id'].'"><div class="bob-container"><span></span></div></a></div></div></div>';
}?>



</div><span class="handle handleNext pagina_next1 active" aria-label="Ver más títulos"><b class="indicator-icon icon-rightCaret"></b></span></div></div></div></div></div>


<!-- 2 -->





<!-- 3 -->
<div class="lolomoRow lolomoRow_title_card originals-panels-row" data-list-context="netflixOriginals"><h2 class="rowHeader"><a aria-label="originales de Anime Onegai" class="rowTitle originals-row-title" href="/browse/genre/839338"><div class="row-header-title">Upcoming</div><div class="aro-row-header"><div class="see-all-link">Ver todos</div><div class="aro-row-chevron icon-akiraCaretRight"></div></div></a></h2><div class="rowContainer rowContainer_title_card" id="row-6"><div class="ptrack-container"><div class="rowContent slider-hover-trigger-layer"><div class="slider"><span class="handle handlePrev pagina_prev2 active" tabindex="0" role="button" aria-label="Ver títulos anteriores"><b class="indicator-icon icon-leftCaret"></b></span><div class="sliderMask showPeek "  ><div id="genr_actualizado2">




<?php
 foreach ($upcoming as $movie){
echo '<div class="slider-item slider-item-0"><div class="title-card-container"><div id="title-card-6-0" class="slider-refocus title-card title-card-tall-panel"><div class="ptrack-content"><div class="boxart-size-16x9 boxart-container boxart-rounded"></div><div class="boxart-size-1x2 boxart-tall-panel boxart-container"><img class="boxart-image-tall boxart-image-in-padded-container" src="https://image.tmdb.org/t/p/w185'.$movie['poster_path'].'" alt="'.$movie['title'].'"></div></div><a href="peliculas?id='.$movie['id'].'"><div class="bob-container"><span></span></div></a></div></div></div>';
}?>


</div><span class="handle handleNext pagina_next2 active" aria-label="Ver más títulos"><b class="indicator-icon icon-rightCaret"></b></span></div></div></div></div>




</div></div>
<!-- 3 -->
</div></div></div>
<script src="js/scroll.js"></script>
</body></html>