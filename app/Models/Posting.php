<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Posting extends Model
{
    use HasFactory;

    protected $table = 'postings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'judul',
        'slug',
        'konten',
        'status',
        'uuid_kategori',
        'author',
        'pengunjung',
        'like',
        'foto',
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
