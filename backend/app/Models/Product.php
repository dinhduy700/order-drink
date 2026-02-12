<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\LogsActivity;
class Product extends Model
{
    use LogsActivity;

    protected $fillable = [
        'name',
        'price',
    ];
    
    protected $appends = ['name_price'];

    public function getNamePriceAttribute()
    {
        return $this->name . ' ' . $this->price;
    }
}
