<?php
// на вход принимает адрес
// возвращает массив [0] latitude [1] longitude
// API https://tech.yandex.ru/maps/doc/geocoder/desc/concepts/input_params-docpage/
// за основу взят проектик
// https://gist.github.com/RDIFB0/6000481

function getGeocode($string)
{
  if($string == true) {
  $request = 'https://geocode-maps.yandex.ru/1.x/?geocode=' . $string;
  $geocode = file_get_contents($request);
  $xml = new SimpleXMLElement($geocode);
  $xml->registerXPathNamespace('ymaps', 'http://maps.yandex.ru/ymaps/1.x');
  $xml->registerXPathNamespace('gml', 'http://www.opengis.net/gml');
  $result = $xml->xpath('/ymaps:ymaps/ymaps:GeoObjectCollection/gml:featureMember/ymaps:GeoObject/gml:Point/gml:pos');
  $chunks = spliti (' ', $result[0]);
  }
  return $chunks;
}
