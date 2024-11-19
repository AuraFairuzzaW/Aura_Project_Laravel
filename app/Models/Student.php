<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ["nama", "umur", "kelas", "guru_id"];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'id');
    }
}
