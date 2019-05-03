<?php

namespace App\Food;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Base
 * @package App\Food
 *
 * Utilizzabile per creare modelli con la connessione preimpostata
 */
class Base extends Model
{
    protected $connection = 'food';
}
