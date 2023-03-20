<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinggroup extends Model
{
    
    use HasFactory;
    public function seervices(): BelongsTo{
        return $this->BelongsTo(Seervice::class);
    }
    public function products(): BelongsTo{
        return $this->BelongsTo(Product::class);
    }
    public function abouts(): BelongsTo{
        return $this->BelongsTo(About::class);
    }
    public function teams(): BelongsTo{
        return $this->BelongsTo(Team::class);
    }
    public function contacts(): BelongsTo{
        return $this->BelongsTo(Contact::class);
    }
}
//   public function aroots(): HasMany
//     {
//         return $this->hasMany(aroot::class);
//     }