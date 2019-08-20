<?php namespace Information\Rent\Models;

use Model;

/**
 * Proyecto Model
 */
class Proyecto extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'information_rent_proyectos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'proyecto'=>'Information/Rent/Models/proyectp',
        'despacho'=>'Information/Rent/Models/despacho'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
