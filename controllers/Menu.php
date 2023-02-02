<?php


class Menu extends Controller
{
    public $MenuModel;
    public $ApperitifModel;
    public $DessertModel;

    /**
     * @var MenuModel
     * @var ApperitifModel
     * @var DessertModel
     */
    public function index()
    {
        $menu = $this->loadModel('MenuModel');  
        $menu = $this->MenuModel->getAll();

        $appero = $this->loadModel('ApperitifModel');  
        $appero = $this->ApperitifModel->getAll();

        $dessert = $this->loadModel('DessertModel');  
        $dessert = $this->DessertModel->getAll();

        $this->render('menu', ['menu' => $menu, 'appero'=> $appero, 'dessert' => $dessert]);
    }


}
