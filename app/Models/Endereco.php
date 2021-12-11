<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'endereco';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cep',
        'estado',
        'cidade',
        'bairro',
        'logradouro',
        'numero',
        'latitude',
        'longitude',
        'cliente_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
