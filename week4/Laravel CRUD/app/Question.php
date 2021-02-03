<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // apabila mau meng overide nama table nya
    // atau memang tidak ada bentuk jamaknya, ex. 
    // protected $table = "pertanyaan";
    // cari di dokumentasi => eloquent ORM

    // cara 2 => store data dengan mess (eloquent)
    // harus mendefinisikan fillable nya => mendifinisikan kolom2 mana saja
    // protected $fillable = ['judul', 'isi'];

    // opsi 2 bisa menggunakan kebalikannya (guarded) => kolom mana saya yang tidak boleh diisi
    protected $guarded = []; // semua kolom boleh diisi
}
