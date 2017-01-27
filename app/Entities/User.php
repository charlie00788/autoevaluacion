<?php

namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function person()
    {
        return $this->hasOne(Person::class, 'id');
    }

    public function unity()
    {
        return $this->hasOne(Unity::class, 'id', 'unity_id');
    }

    public function getEstadoAttribute()
    {
        if($this->active) return 'Vigente';
        else return 'Desactivado';
    }

    public function getRolAttribute()
    {
        if($this->role == 'student') return 'Estudiante';
        if($this->role == 'admin') return 'Administrador';
        if($this->role == 'estudios') return 'Jefe de Estudios';
        if($this->role == 'disciplina') return 'Jefe de Disciplina';
    }
}
