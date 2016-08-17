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

}