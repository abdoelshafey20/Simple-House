<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ["id","title_en","title_ar","description_en","description_ar","created_at","updated_at"];

}
