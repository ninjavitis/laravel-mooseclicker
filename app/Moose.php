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


    public function mooseClick($moose_id)
    {
        $moose = Moose::find($moose_id);
        $moose->increment('clicks');
        $moose->last_click = now();

        return redirect('/');
    }
}
