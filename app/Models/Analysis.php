<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Analysis extends Model
{
    use HasFactory;

    /**
     * Get the visit that owns the Analysis
     *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function visit(): BelongsTo
    {
        return $this->belongsTo(Visit::class, 'foreign_key', 'other_key');
    }
}
