<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class KategoriData extends Model
{
    use HasFactory;

    protected $table = 'kategori_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nama_kategori',
        'slug',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        // Event listener untuk membuat UUID sebelum menyimpan
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
