<?php
namespace db;

class order_items implements dbActions
{
    private $id = '';
    private $id_order = '';
    private $id_product = '';
    private $price = '';
    private $count = '';

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
    public function getIdOrder()
    {
        return $this->id_order;
    }

    /**
     * @param string $id_order
     */
    public function setIdOrder($id_order)
    {
        $this->id_order = $id_order;
    }

    /**
     * @return string
     */
    public function getIdProduct()
    {
        return $this->id_product;
    }

    /**
     * @param string $id_product
     */
    public function setIdProduct($id_product)
    {
        $this->id_product = $id_product;
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


}