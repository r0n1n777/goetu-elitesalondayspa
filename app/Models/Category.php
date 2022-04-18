<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = array('name', 'service_id');
    public $timestamps = true;

    public function service()
    {
        return $this->belongsTo(Service::class);    
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
