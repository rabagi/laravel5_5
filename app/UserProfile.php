<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{	
	protected $table = 'profiles';
    
    public function user(){

    	return $this->hasOne(User::class);
    }
}
