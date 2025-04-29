<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'school_class_id',
    ];

    public function schoolClass()
{
    return $this->belongsTo(SchoolClass::class, 'school_class_id');
}

    public function attendances()
{
    return $this->hasMany(Attendance::class);
}

}
