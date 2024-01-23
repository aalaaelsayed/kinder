<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\models\Classe;

class Teacher extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'position',
        'image',
        'facebook',
        'twiter',
        'active',
        'instagram',
        'teacherName',

        ];

    }
