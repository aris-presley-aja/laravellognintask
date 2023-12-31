<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable=[
     'name','slug','deskripsi','status'
    ];

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject')->withDefault([
            'subject' => 'subject'
        ])();
        // return $this->belongsTo(Category::class)->withDefault();
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function student_results()
    {
     return $this->hasMany('App\Models\Student_result');
    }
}
