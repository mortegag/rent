<?php namespace Information\Rent\Models;

use Model;

/**
 * Pedido Model
 */
class Pedido extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'information_rent_pedidos';

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
        'despacho'=>'Information/Rent/Model/despacho'
    ];
    public $belongsTo = [
        'equipo' => 'Information/Rent/Models/equipo',
        'proyeto'=> 'Information/Rent/Model/proyecto'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
