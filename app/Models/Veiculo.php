<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Models\FillableFields;
use App\Traits\Eloquent\SearchLikeTrait;

class Veiculo extends Model
{
    use FillableFields, SearchLikeTrait;

    protected $table = 'veiculos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marca', 'tipo', 'km_inicial', 'trem_forca'
    ];

    /**
     * @return mixed
     */
    public function getRecordTitle()
    {
        return $this->tipo;
    }    //
}
