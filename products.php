<?php
namespace db;

class products implements dbActions
{
    private $id = '';
    private $id_catalog = '';
    private $title = '';
    private $mark = '';
    private $count = '';
    private $price = '';
    private $description = '';
    private $status = '';

    function create()
    {
        // TODO: Implement create() method.
    }

    function find()
    {
        // TODO: Implement find() method.
    }

    function findOne($id)
    {
        // TODO: Implement findOne() method.
    }

    function findBy($arr = Array())
    {
        // TODO: Implement findBy() method.
    }

    function update($arr1 = Array(), $arr2 = Array())
    {
        // TODO: Implement update() method.
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
    }


    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdCatalog()
    {
        return $this->id_catalog;
    }

    /**
     * @param string $id_catalog
     */
    public function setIdCatalog($id_catalog)
    {
        $this->id_catalog = $id_catalog;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * @param string $mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * @return string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param string $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}