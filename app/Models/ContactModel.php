<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    // Define the table name if it's not the plural form of the model name
    protected $table = 'contacts'; 

    // Specify the fields that are mass-assignable
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'message',
    ];
}
