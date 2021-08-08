<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['name', 'username', 'zipcode', 'email', 'password'];

    public function search($filters = null){
        
        $results = $this
                    ->where('name', 'LIKE', "%{$filters['name']}%")
                    ->where('username', 'LIKE', "%{$filters['username']}%")
                    ->where('email', 'LIKE', "%{$filters['email']}%")
                    ->paginate();

        return $results;
    }

}
