<?php namespace BuzzwordCompliant\DBContent\Models;
use October\Rain\Database\Model;


class StaticBlock extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'bc_staticblocks';
    public $rules = [
        'key' => 'required|unique:bc_staticblocks|max:64'
    ];
}