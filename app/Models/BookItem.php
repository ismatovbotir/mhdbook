<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class BookItem extends Model
{
    use HasUuids;
    protected $keyType="string";
    protected $autoincremental=false;

}
