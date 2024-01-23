<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\models\Teacher;

class Classe extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='classes';
    protected $fillable = [
        'className',
        'age',
        'time',
        'capacity',
        'price',
        'active',
        'class_image',
        'teacherId',
        ];
     
        public function teachers()
        {
        return $this->belongsTo (Teacher::class,'teacherId');
        }

}
