<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nim', 'nama', 'fakultas', 'student_number'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
