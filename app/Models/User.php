<?php
namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{

    use Authenticatable;

    protected $connection = 'mongodb';
    protected $collection = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'mobilenumber', 'emergencymobilenumber', 'role', 
        'class', 'avatar', 'date_of_birth', 'gender', 'ic_number', 'nationality', 'address',
        'fname', 'fcontact', 'foccupation', 'mname', 'mcontact', 'moccupation', 'gname',
        'gcontact', 'goccupation', 'blood_type', 'allergies',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Use ic_number for authentication
    public function getAuthIdentifierName()
    {
        return 'ic_number';
    }
}
