<?php namespace Pamatz\Clientes\Models;

use Model;

/**
 * Cliente Model
 */
class Cliente extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'pamatz_clientes_clientes';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
