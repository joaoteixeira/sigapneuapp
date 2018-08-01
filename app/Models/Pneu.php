<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pneu extends Model
{
    use FillableFields, SearchLikeTrait;

    protected $table = 'pneus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marca', 'numero_serie', 'data_fabricacao', 'data_validade', 'medida', 'pneu_novo', 'antifurto', 'km_inicial'
    ];

    /**
     * @return mixed
     */
    public function getRecordTitle()
    {
        return $this->numero_serie;
    }    //
}
}
