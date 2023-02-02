<?php


class DessertModel extends Model
{
    public function __construct()
    {
        $this->table = "dessert";
        $this->getConnection();
    }
}
