<?php  namespace Enozom\Basecash\Model;

use Illuminate\Database\Eloquent\Model;

class Account  extends BaseModel
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;
    
    public function __construct() {
       $this->table =  $this->prefix . 'account';
  	}

    public function test(){
		return ' table '. $this->table ;
	}

    
}