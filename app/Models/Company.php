<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;


    protected $fillable = [
        'title',
        'phone',
        'email',
        'full_address'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $max_id = Company::query()->max('id') + 1;
            $model->reg_no = 'MTS' . Str::padLeft($max_id, 4, 0);
            $model->created_by = Auth::check() ? Auth::id() : 1;
        });

        static::updating(function ($model) {
            $model->updated_by = Auth::check() ? Auth::id() : 1;
        });
    }

    public function createdUser(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedUser(){
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
