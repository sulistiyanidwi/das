<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DasModel extends Model
{
    protected $table = 'das';
    protected $guarded = ['id'];
    protected $fillable = ['petak_id'];

    public function petak()
    {
        return $this->belongsTo(PetakModel::class);
    }

    public function atribut()
    {
        return $this->belongsTo(AtributModel::class);
    }
}