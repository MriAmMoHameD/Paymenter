<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable = [
        'title',
        'description',
        'status',
        'client'
    ];

    public function services()
    {
        return $this->belongsToMany(Services::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client');
    }

    public function messages()
    {
        return $this->hasMany(TicketMessages::class);
    }
}