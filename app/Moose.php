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

    public static function create($user_id){
        $moose = new Moose;

        $moose->user_id = $user_id;
        $moose->name = 'Brown Moose';
        $moose->image = 'https://www.alaskawildlife.org/wp-content/uploads/2016/12/moose-face.jpg';
        $moose->last_click_at = now();
        $moose->save();

        $user = auth()->user();
        $user->current_moose_id = $moose->id;
        $user->save();
    }


    public function mooseClick($moose_id)
    {
        $moose = Moose::find($moose_id);
        $moose->increment('clicks');
        $moose->last_click = now();

        return redirect('/');
    }
}
