<?php
namespace db;

class users implements dbActions
{
    private $id = '';
    private $title = '';
    private $status = '';


    function create()
    {
        // TODO: Implement create() method.
    }

    function find()
    {
        // TODO: Implement find() method.
    }

    function update($arr1 = Array(), $arr2 = Array())
    {
        // TODO: Implement update() method.
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
    }

    function findOne($id)
    {
        // TODO: Implement findOne() method.
    }

    function findBy($arr = Array())
    {
        // TODO: Implement findBy() method.
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