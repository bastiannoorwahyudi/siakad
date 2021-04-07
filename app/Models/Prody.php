<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prody extends Model
{
    use HasFactory;

    protected $table = 'programstudy';
    protected $fillable = ['KodePrody', 'ProgramStudy', 'JurusanID'];

    // relasi ke table Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class,'JurusanID', 'id');
    }
}
    