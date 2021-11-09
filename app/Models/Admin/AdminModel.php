<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
          'admin_email',  'admin_password',  'admin_name', 'admin_phone'
    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'tbl_admin';
    
}