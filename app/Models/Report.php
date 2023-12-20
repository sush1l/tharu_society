<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'report_category_id',
        'title',
        'title_en',
        'date',
        'file',
        'description',
        'description_en'
    ];

    public function setFileAttribute($value): void
    {
        if (!empty($value) && !is_string($value)) {
            $this->attributes['file'] = $value->store('report', 'public');
        }
    }

    public function getFileUrlAttribute(): string
    {
        return $this->attributes['file'] ? Storage::disk('public')->url($this->attributes['file']) : '';
    }
}
