<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->addExternalJS("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=9683ce89-0a99-4272-aa72-2b62db02f750");
?>
<script>
    var arMapData = <?=CUtil::PhpToJSObject($arParams['DATA_ORG'])?>;
    var coordinates = [<?=$arParams['COORDINATES']?>];
</script>

<h2>Организации #CITY_PP# на карте:</h2>
<div id="map"></div>