<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portofolio extends Model
{
    use HasFactory;
    protected $table = "portofolios";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
