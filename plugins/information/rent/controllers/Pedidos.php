<?php namespace Information\Rent\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Pedidos Back-end Controller
 */
class Pedidos extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Information.Rent', 'rent', 'pedidos');
    }
}
