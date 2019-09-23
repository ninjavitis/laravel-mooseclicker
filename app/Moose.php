<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moose extends Model
{
    //
    public function set_name($name)
    {
        $this->name = $name;
    }


    public function mooseclick()
    {
        $this->clicks += 1;
        $this->last_click = now();
    }
}
