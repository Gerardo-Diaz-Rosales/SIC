<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['name_student', 'lastname_student', 'id_student', 'birthday', 'comments','class'];

    public function activities():BelongsToMany{
        return $this->belongsToMany(Activity::class);
    }

}
