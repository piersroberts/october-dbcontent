<?php
namespace BuzzwordCompliant\DBContent\Controllers;

use Backend\Facades\BackendMenu;

class Staticblocks extends \Backend\Classes\Controller
{
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BuzzwordCompliant.DBContent', 'dbcontent');
        $this->addCss('/plugins/buzzwordcompliant/dbcontent/assets/css/list.css', "1.0.0");

    }

    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController'
    ];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

}