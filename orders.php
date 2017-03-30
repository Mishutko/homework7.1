<?php
use db\dbActionsInterface;
include_once('dbActions.php');

class orders extends dbActions implements dbActionsInterface
{
    private $id = '';
    private $id_user = '';
    private $data_order = '';
    private $status = '';


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
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param string $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return string
     */
    public function getDataOrder()
    {
        return $this->data_order;
    }

    /**
     * @param string $data_order
     */
    public function setDataOrder($data_order)
    {
        $this->data_order = $data_order;
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