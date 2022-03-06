<!doctype html><html lang="en"><head>
<meta charset="utf-8"/><link rel="icon" href="/favicon.ico"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<meta name="google-site-verification" content="ZXuHLytYjnYVquEq8cxaPKY5sxLfwIiC_JFDm14uGdo"/><meta name="theme-color" content="#000000"/>
<meta name="description" content="Проектирование и пошив полезной одежды. Униформа на заказ . Оденем красиво ваше заведение."/><meta name="keywords" content="Производство текстильной продукции
    Текстильная продукция в Узбекистане
    Текстильное производство
   Kannas_textile 
Пошив для гостинечного бизнес 
    Купить скатерти в Ташкенте
    Пошив постельного белья 
Постельное бельё s
Проектирование и пошив женской одежды. 
Пошив скатертей и салфеток 
Чехол для мебели 
Чехол для стульев 
Пошив Фартуков 
Пошив кителей
Пошив униформы
Форма для поваров 
Форма для барменов
Форма для медиков 
Форма для мед.персонала 
Форма для ресторана 
Униформа на заказ 
 Пошив для HoReCA 
Цех по производству женской одежды 
Пошив женской одежды для магазинов сериями 
Цех по пошиву женской одежды 
Ателье kannas_textile 
Цех kannas_textile 
Пошив пледа Ташкент 
Пошив подушек Ташкент 
Спец.одежда 
Униформа 
 Пошив Комбенезон 
   Текстильная продукция 
    Производство текстильной продукции в Узбекистане 
Хар хил турдаги фартукларни тикиш
Тикиш-бичиш цехи 
Модель ишлаб чиказиш 
Айёллар киймини серияли тикиш 
Тиббиёт ходимлари формаси 
Ресторан ва мехмонхона учун форма
    "><link rel="apple-touch-icon" href="/logo192.png"/><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/><link rel="manifest" href="/manifest.json"/><link rel="icon" type="image/x-icon" href="image2vector.svg"><title>Kannas textile</title><link href="/static/css/main.8d25b4e0.chunk.css" rel="stylesheet"></head><body><noscript>You need to enable JavaScript to run this app.</noscript><div id="root"></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script>!function(e){function r(r){for(var n,p,l=r[0],a=r[1],f=r[2],c=0,s=[];c<l.length;c++)p=l[c],Object.prototype.hasOwnProperty.call(o,p)&&o[p]&&s.push(o[p][0]),o[p]=0;for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n]);for(i&&i(r);s.length;)s.shift()();return u.push.apply(u,f||[]),t()}function t(){for(var e,r=0;r<u.length;r++){for(var t=u[r],n=!0,l=1;l<t.length;l++){var a=t[l];0!==o[a]&&(n=!1)}n&&(u.splice(r--,1),e=p(p.s=t[0]))}return e}var n={},o={1:0},u=[];function p(r){if(n[r])return n[r].exports;var t=n[r]={i:r,l:!1,exports:{}};return e[r].call(t.exports,t,t.exports,p),t.l=!0,t.exports}p.m=e,p.c=n,p.d=function(e,r,t){p.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},p.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},p.t=function(e,r){if(1&r&&(e=p(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(p.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)p.d(t,n,function(r){return e[r]}.bind(null,n));return t},p.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return p.d(r,"a",r),r},p.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},p.p="/";var l=this["webpackJsonpmy-app"]=this["webpackJsonpmy-app"]||[],a=l.push.bind(l);l.push=r,l=l.slice();for(var f=0;f<l.length;f++)r(l[f]);var i=a;t()}([])</script><script src="/static/js/2.3008ea87.chunk.js"></script><script src="/static/js/main.a154747a.chunk.js"></script>
	<?php 
    
    if(isset($_POST['submit'])){
    
    $apiToken = "1985197200:AAEpKtOHN_svNax2AOPa-SqRdog7uTLWrF8";
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $message = $first_name . " " . $last_name . ":" . "\n\n" . $_POST['message'];
    $data = [
        'chat_id' => '-1001583475285',
        'text' => $message
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
    }
    ?>
	</body></html>