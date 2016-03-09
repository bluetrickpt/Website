<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
 * O nome é no singular, assim o Laravel reconhece automaticamente a tabela 'projects'
 * criado com
 * php artisan make:model Project
 */
class Project extends Model
{


    /*
     * relação com o modelo "User" Many to Many
     * https://laravel.com/docs/5.2/eloquent-relationships#many-to-many
     *
     * NÃO É NECESSÁRIO FAZER EM TODOS OS MODELOS
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}