<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'package_description',
        'length',
        'height',
        'width',
        'weight',
        'delivery_id',
    ];

    protected $casts = [
        'length' => 'decimal:2',
        'height' => 'decimal:2',
        'width' => 'decimal:2',
        'weight' => 'decimal:2',
    ];

    /**
     * Get the delivery associated with the package.
     */
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
}
