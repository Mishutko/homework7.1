<?php
namespace db;


interface dbActions
{
    function create(); //Создать запись в БД

    function find(); //Возврящает все записи из таблицы

    function findOne($id); //Принимает Id записи и возвращает данные из БД

    function findBy($arr = Array()); // метод принимающий 1 параметр (ассоциативный массив) ­
                                    // имя ключа массива должно соответвовать имени поля в таблице,
                                    // значение ­ значению этого поля. Метод возвращает список записей, согласно данному условию

    function update($arr1 = Array(), $arr2 = Array());  //метод принимает 2 параметра:
                                                        // condition ­ ассоциативный массив отражающий условия для обновления записей
                                                        // data ­ ассициативный массив отражающий значения каких полей записи необходимо изменить в запросе

    function delete($id); // метод принимает 1 аргумент (id записи) и удаляет запись из БД
}