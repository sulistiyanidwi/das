<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtributModel extends Model
{
    protected $table = 'atribut';
    protected $guarded = ['id'];
    protected $fillable = ['das_id'];

    public function das()
    {
        return $this->belongsTo(DasModel::class);
    }
}
