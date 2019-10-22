<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaleConosco extends Model
{
    protected $table = 'FaleConosco';

    protected $connection = 'mysql';

    protected $primaryKey = 'id';
    
    // Para poder utilizar o mass assignment sem problemas
    protected $guarded = [];
}
