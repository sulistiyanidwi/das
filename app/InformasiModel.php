<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiModel extends Model
{
    protected $table = 'infrormasi';
    protected $guarded = ['id'];
    protected $fillable = ['foto','infrormasi'];
}
    