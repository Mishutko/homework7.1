<?php

use db\dbActionsInterface;

include_once('dbActionsInterface.php');

class dbActions implements dbActionsInterface
{
    private $host = "localhost";
    private $db = "homework5";
    private $login = "root";
    private $password = "";
    public $nameClass = '';
    public $myPDO = '';

    function __construct()
    {
        $this->nameClass = get_class($this);
        try {
            $this->myPDO = new PDO("mysql:host=$this->host; dbname=$this->db", $this->login, $this->password);
            echo 'соединение установлено в классе '.$this->nameClass;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function create($arr = Array()) //Создать запись в БД
    {
        foreach ($arr as $index => $item) {
            $sql = "INSERT INTO $this->nameClass SET $index = ?";
            $stmt = $this->myPDO->prepare($sql);
            $stmt->bind_param(1, $item);
            $result = $stmt->execute();
        }
        return $result;
    }

    function find() //Возврящает все записи из таблицы
    {
        $sql = "SELECT * FROM $this->nameClass";
        $stmt = $this->myPDO->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    function findOne($id) //Принимает Id записи и возвращает данные из БД
    {
        $sql = "SELECT `id` FROM $this->nameClass WHERE `id` = ?";
        $stmt = $this->myPDO->prepare($sql);
        $stmt->bind_param(1, $id);
        $result = $stmt->execute();
        return $result;
    }

    function findBy($arr = Array())   // метод принимающий 1 параметр (ассоциативный массив) ­
                                      // имя ключа массива должно соответвовать имени поля в таблице,
                                      // значение ­ значению этого поля. Метод возвращает список записей, согласно данному условию
    {
        foreach ($arr as $index => $item)
        {
            $sql = "SELECT $index FROM $this->nameClass WHERE $index = :$item";
            $stmt = $this->myPDO->prepare($sql);
            $result = $stmt->execute($arr);
        }
        return $result;
    }

    function update($arr1 = Array(), $arr2 = Array()) //метод принимает 2 параметра:
                                                      // condition ­ ассоциативный массив отражающий условия для обновления записей
                                                      // data ­ ассициативный массив отражающий значения каких полей записи необходимо изменить в запросе
    {

        $whereName = '';
        $whereData = '';
        $nameStat = '';
        $dataStat = '';
        foreach ($arr1 as $index => $item) {
            $whereName = $index;
            $whereData = $item;
        }
        foreach ($arr2 as $index => $item) {
            $nameStat = $index;
            $dataStat = $item;
        }
        $sql = "UPDATE $this->nameClass SET $nameStat = ?
            WHERE $whereName = $whereData";
        $stmt = $this->myPDO->prepare($sql);
        $stmt->bind_param(1, $dataStat);
        $result = $stmt->execute();
        return $result;

    }

    function delete($id) // метод принимает 1 аргумент (id записи) и удаляет запись из БД
    {
        $sql = "DELETE FROM $this->nameClass WHERE `id` = ?";
        $stmt = $this->myPDO->prepare($sql);
        $stmt->bind_param(1, $id);
        $result = $stmt->execute();
        return $result;
    }


}