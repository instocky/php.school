<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.08.2016
 * Time: 16:44
 * Read and write files
 */
class files
{
    public $path; // путь по которому лежит файл, полный путь к файлу
    public $read;
    public $arr;

    /**
     * @return mixed
     */
    public function getRecords($path = 0)
    {
//        return $this->arr = file(__DIR__ . '/../date/record.txt');
//        $this->path = '/../date/record.txt';
        $this->path = $path;
        return $this->arr = file(__DIR__ . $this->path);

    }
}