<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentsModel extends Model
{


    protected $table = "investments";
    protected $fillable = [
        "capital",
        "workingcapital",
        "wothdrawals",
        "sales",
        "profits"
    ];

}
