<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Peringatan
 * @package App\Models
 * @version May 24, 2021, 9:40 am UTC
 *
 * @property string $kota
 * @property string $isi
 */
class Peringatan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'peringatans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kota',
        'isi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kota' => 'string',
        'isi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kota' => 'required',
        'isi' => 'required'
    ];

    
}
