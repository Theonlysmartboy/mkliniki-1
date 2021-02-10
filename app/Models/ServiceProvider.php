<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceProvider extends Model
{
    use HasFactory;
    public function Service(){
        return $this->belongsToMany(Service::Class);
    }
}
