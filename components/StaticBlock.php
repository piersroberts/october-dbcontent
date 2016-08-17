<?php namespace BuzzwordCompliant\DBContent\Components;

use Log;
use BuzzwordCompliant\DBContent\Models\StaticBlock as StaticBlockModel;

class StaticBlock extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Static Block',
            'description' => 'Generic static block component'
        ];
    }


    public function onRender()
    {
        $staticBlock = StaticBlockModel::where('key', $this->property('key'))->first();

        if ($staticBlock) {
            return $staticBlock->content;
        }

        Log::notice('Static block key: "' . $this->property('key') . '" not found in '.$this->getPage()->fileName);
    }
}