<?php
use db\dbActionsInterface;
include_once('dbActions.php');

class users extends dbActions implements dbActionsInterface
{
    private $id = '';
    private $name = '';
    private $lastname = '';
    private $birthday = '';
    private $email = '';
    private $is_active = '';
    private $reg_date = '';
    private $last_update = '';
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     */
    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
    }

    /**
     * @return string
     */
    public function getRegDate()
    {
        return $this->reg_date;
    }

    /**
     * @param string $reg_date
     */
    public function setRegDate($reg_date)
    {
        $this->reg_date = $reg_date;
    }

    /**
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * @param string $last_update
     */
    public function setLastUpdate($last_update)
    {
        $this->last_update = $last_update;
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

$obj = new users();


foreach ($obj->find() as $item) {

    echo '<br>'.$item['reg_date'];
}
