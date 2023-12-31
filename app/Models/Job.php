<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Laravel\Scout\Searchable;

class Job extends Model
{
    use HasFactory, SoftDeletes;
    use Searchable;
    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'add_city_id',
        'title',
        'address',
        'salary',
        'date',
        'image',
        'end_date',
        'description',
        'position'
    ];

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'address' => $this->address,
            'salary' => $this->salary,
            
        ];
    }
    public function addCity(): BelongsTo
    {
        return $this->belongsTo(AddCity::class);
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: static fn($value) => !empty($value) ? Storage::disk('public')->url($value) : '',
            set: static fn($value) => (!empty($value) && !is_string($value)) ? $value->store('job', 'public') : null,
        );
    }
}
