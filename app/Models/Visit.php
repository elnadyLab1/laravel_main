<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;  

   /**
    * Get the patient that owns the Visit
    *
    // * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function patient(): BelongsTo
   {
       return $this->belongsTo(Patient::class, 'foreign_key', 'other_key');
   }

   /**
    * Get all of the analysiss for the Visit
    *
    // * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function analysiss(): HasMany
   {
       return $this->hasMany(Analysis::class, 'foreign_key', 'local_key');
   }
}
