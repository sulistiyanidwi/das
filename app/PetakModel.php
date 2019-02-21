<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetakModel extends Model
{
    protected $table = 'petak';
    protected $guarded = ['id'];
    protected $fillable = ['petak'];

    public function das()
    {
        return $this->hasOne(DasModel::class);
    }
}
