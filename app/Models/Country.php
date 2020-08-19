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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo ('App\Models\User','id');
    }
}