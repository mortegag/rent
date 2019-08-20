<?php namespace Information\Rent\Models;

use Model;

/**
 * Equipo Model
 */
class Equipo extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'information_rent_equipos';

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
        'despacho'=>'Information/Rent/Models/despacho',
        'pedido' => 'Information/Rent/Models/pedido'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
