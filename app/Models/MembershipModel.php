<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipModel extends Model
{
    use HasFactory;
    protected $table = 'membershipform';
    protected $primarykey= 'id';
    protected $fillable = ['name','email' ,'phone'];
}
