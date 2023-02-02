<?php


class ApperitifModel extends Model
{
    public function __construct()
    {
        $this->table = "aperitif";
        $this->getConnection();
    }
}
