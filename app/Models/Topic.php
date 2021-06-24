<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topic extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
