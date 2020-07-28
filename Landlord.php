<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $table = 'landlord';
    protected $fillable = ['owner_id', 'fname','lname', 'phonenumber', 'dob', 'city', 'district', 'ward'];
}
