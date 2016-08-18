<?php namespace BuzzwordCompliant\DBContent;
use Backend;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'DBContent',
            'author' => 'piersroberts@gmail.com',
            'icon' => 'icon-database'
        ];
    }

    public function registerNavigation()
    {
        return [
            'dbcontent' => [
                'label'       => 'DBContent',
                'url'         => Backend::url('buzzwordcompliant/dbcontent/staticblocks'),
                'iconSvg'     => '/plugins/buzzwordcompliant/dbcontent/assets/database.svg',
                'permissions' => ['buzzwordcompliant.dbcontent.*'],
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'BuzzwordCompliant\DBContent\Components\StaticBlock' => 'dbcontent'
        ];
    }

    public function registerPermissions()
    {
        return [
            'buzzwordcompliant.dbcontent.list_static_blocks' => [
                'label' => 'Show the static block list',
                'tab' => 'DBContent'
            ],
            'buzzwordcompliant.dbcontent.new_static_block' => [
                'label' => 'Add a static block',
                'tab' => 'DBContent'
            ],
            'buzzwordcompliant.dbcontent.edit_static_block' => [
                'label' => 'Save changes to an existing static block',
                'tab' => 'DBContent'
            ],
            'buzzwordcompliant.dbcontent.delete_static_block' => [
                'label' => 'Delete a static block',
                'tab' => 'DBContent'
            ],
            'buzzwordcompliant.dbcontent.change_key_names' => [
                'label' => 'Change the key name of a static block',
                'tab' => 'DBContent'
            ]
        ];
    }

}