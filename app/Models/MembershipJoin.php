<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MembershipJoin extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'country_id',
        'full_name',
        'town',
        'state',
        'code',
        'contact_no',
        'address',
        'email',
        'district'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
