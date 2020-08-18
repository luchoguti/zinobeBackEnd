<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;


/**
 * Class Country
 * @package App\Models
 */
class Country extends Eloquent
{
    /**
     * @var string
     */
    protected $table = 'country';
    /**
     * @var string[]
     */
    protected $fillable = [
      'code','name'
    ];
}