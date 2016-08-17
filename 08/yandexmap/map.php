<?php
// https://gist.github.com/RDIFB0/6000481
    $geocode = file_get_contents('http://geocode-maps.yandex.ru/1.x/?geocode='.urlencode('__ADDRESS__').'&key=__API_KEY__');
    $xml = new SimpleXMLElement($geocode);
    $xml->registerXPathNamespace('ymaps', 'http://maps.yandex.ru/ymaps/1.x');
    $xml->registerXPathNamespace('gml', 'http://www.opengis.net/gml');
    $result = $xml->xpath('/ymaps:ymaps/ymaps:GeoObjectCollection/gml:featureMember/ymaps:GeoObject/gml:Point/gml:pos');
    echo($result[0]);
