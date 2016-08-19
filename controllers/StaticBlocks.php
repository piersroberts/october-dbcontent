<?php
namespace BuzzwordCompliant\DBContent\Controllers;

use Backend\Facades\BackendMenu;

class StaticBlocks extends \Backend\Classes\Controller
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

    public $requiredPermissions = ['buzzwordcompliant.dbcontent.list_static_blocks'];

    public function formExtendFields($form,$fields)
    {
        if(!$form->model->id)
            return;
        if(!$this->user->hasAccess('buzzwordcompliant.dbcontent.edit_static_block') || !$this->user->hasAccess('buzzwordcompliant.dbcontent.change_key_names')) {
            foreach ($fields as $field) {
                if ($field->fieldName == 'key') {
                    $field->attributes['field']['readonly'] = true;
                }
            }
        }
    }
}