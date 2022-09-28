<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['n_item','marca','monitor_serie','procesador','memoria','disco_duro','memoria_serie', 'regulador_serie','ups_serie','teclado_serie','mouse_serie','dualboot','estado'];
}


