<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    protected $table = 'contactus';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'subject',
        'message',
        'status'];
}
