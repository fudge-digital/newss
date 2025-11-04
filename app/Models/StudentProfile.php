<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','parent_id','niss','niss_sequence','full_name','nick_name','gender',
        'birth_place','birth_date','school_origin','size_jersey','phone','status',
        'kelompok_umur','height','weight','jersey_number','activated_at'
    ];

    public function user() { return $this->belongsTo(User::class); }
    public function parent() { return $this->belongsTo(User::class,'parent_id'); }
    public function documents() { return $this->hasMany(Document::class); }
}
