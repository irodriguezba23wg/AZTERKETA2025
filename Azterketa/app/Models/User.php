<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles; 

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles; 

    /**
     *
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'abizena',
        'dni',
        'jaiotze_data',
        'role',
    ];


    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los atributos que deben ser convertidos.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
