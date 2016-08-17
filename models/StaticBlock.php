<?php namespace BuzzwordCompliant\DBContent\Models;
use October\Rain\Database\Model;


class StaticBlock extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'bc_dbcontent';
    public $rules = [
        'key' => 'required|unique:bc_dbcontent|max:64'
    ];
}