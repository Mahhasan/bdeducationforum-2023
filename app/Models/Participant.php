<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table = 'participants';
    protected $fillable = [
        'institute_name',
        'address',
        'email',
        'vc_name',
        'vc_email',
        'vc_cell',
        'contact_name',
        'contact_cell',
        'message',
    ];
}
