<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    /**
     * Get all of the Visits for the Patient
     *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Visits(): HasMany
    {
        return $this->hasMany(Visit::class, 'foreign_key', 'local_key');
    }
     
}
