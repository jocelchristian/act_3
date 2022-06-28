<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class UserJob extends Model{
    protected $table = 'tbluser';
    // column sa table
    protected $fillable = [
        'id', 'Name', 'Edad', 'Gender', 'jobid',
    ];

    public $timestamps = false;
}