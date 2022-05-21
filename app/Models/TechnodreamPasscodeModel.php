<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnodreamPasscodeModel extends Model
{
    use HasFactory;
    protected $table = 'technodream_passcode_models';
    protected $fillable = ['passcode'];
}
