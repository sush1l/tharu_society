<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory,SoftDeletes;

    protected $dates=[
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable=[
        'title',
        'image',
        'date',
        'publish',
        'description',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get:static fn ($value) => !empty($value) ? Storage::disk('public')->url($value): '',
            set:static fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('blog','public'): null,
        );
    }
}
