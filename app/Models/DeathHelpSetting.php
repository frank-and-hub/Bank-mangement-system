<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DeathHelpSetting extends Model {
    use SoftDeletes;
    protected $table = "death_help_settings";
    protected $guarded = [];

}

