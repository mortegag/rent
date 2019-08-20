<?php namespace Information\Rent\Models;

use Model;

/**
 * Despacho Model
 */
class Despacho extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'information_rent_despachos';

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
    public $hasMany = [];
    public $belongsTo = [
        'pedido'=>'Informatio/rent/models/pedido',
        'equipo' => 'Information/Rent/models/equipo',
        'proyecto'=>'Information/Rent/models/proyecto'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
