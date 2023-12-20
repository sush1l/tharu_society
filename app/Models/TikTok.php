<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class TikTok extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title_en',
        'title',
        'slug',
        'video',
    ];

    public function setVideoAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['video'] = $value;
        }
    }

    public function getVideoUrlAttribute(): string
    {
        return $this->attributes['video']  ? Storage::disk('public')->url($this->attributes['video']):'';
    }
}
