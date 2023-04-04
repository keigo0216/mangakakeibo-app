<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'price' => 'required',
        'purchase_number' => 'required',
    );

    public function getTotalPrice()
    {
        return ($this->price)*($this->purchase_number);
    }
}
