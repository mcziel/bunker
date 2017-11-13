<?php namespace AndresAlice\Bunker\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Slideshow extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'ALL' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AndresAlice.Bunker', 'content', 'slideshows');
    }
}