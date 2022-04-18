<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';
    protected $fillable = array('amount', 'amount_plus', 'menu_id');
    public $timestamps = true;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
