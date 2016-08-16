<?php
include __DIR__ . '/conf/classes.php';

// $math = new SchoolClass(15, '"Математика"', 2);
// $rus = new SchoolClass(20, '"Русский язык"', 2);
// $guard = new Teacher(30, '', '', '', '', 27);
$guard = new Teacher();
echo $guard->age . '<br>';
$serviceman = new People();
$serviceman->setPosition('начальник службы охраны');
echo $serviceman->position . '<br>';
echo $serviceman->form . '<br>';
echo $guard->form . '<br>';
