<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\serviceProvider;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    public function serviceProvider(){
        return $this->belongsToMany(ServiceProvider::class);
    }
}
