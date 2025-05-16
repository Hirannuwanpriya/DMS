<?php

namespace App\Models;

use App\Enum\Priority;
use App\Enum\Provider;
use App\Enum\TypeOfGood;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pickup_address',
        'pickup_name',
        'pickup_contact_no',
        'pickup_email',
        'delivery_address',
        'delivery_name',
        'delivery_contact_no',
        'delivery_email',
        'type_of_good',
        'provider',
        'priority',
        'pickup_time',
        'shipment_ready_time',
    ];


    protected $casts = [
        'pickup_time' => 'datetime',
        'shipment_ready_time' => 'datetime',
        'price' => 'decimal:2',
        'type_of_good' => TypeOfGood::class,
        'provider' => Provider::class,
        'priority' => Priority::class,
    ];


    /**
     * Get the packages associated with the delivery.
     */
    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
