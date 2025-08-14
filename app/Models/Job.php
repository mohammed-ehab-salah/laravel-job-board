<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Job
// extends Model
{
    public static function all(){
        return [
            ['title' => 'Programer' , 'salary' => '1000'],
            ['title' => 'Graphic' , 'salary' => '2000'],
        ];
    }
}
