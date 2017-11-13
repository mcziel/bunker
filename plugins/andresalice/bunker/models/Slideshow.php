<?php namespace AndresAlice\Bunker\Models;

use Model;

/**
 * Model
 */
class Slideshow extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andresalice_bunker_slideshows';

    public $attachOne = ['slides' => 'System\Models\File'];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'description'];
}