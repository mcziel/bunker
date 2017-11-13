<?php namespace AndresAlice\Bunker\Models;

use Model;

/**
 * Model
 */
class Quote extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    protected $fillable = ['name', 'lastname', 'email', 'phone', 'celphone', 'service', 'message', 'company', 
    'address'];
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andresalice_bunker_quotes';


}