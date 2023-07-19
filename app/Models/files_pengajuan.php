<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class files_pengajuan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function administation_document() {
        return $this->belongsTo(administation_documents::class);
    }
}
