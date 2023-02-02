<?php


class MenuModel extends Model
{
    public function __construct()
    {
        $this->table = "menu";
        $this->getConnection();
    }
}
