<?php namespace Enozom\Basecash\Model;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model{


public $prefix  ;
public $timestamps = true;

 public function __construct() {
        $this->$prefix = 'basecash_';

  }

}