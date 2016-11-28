<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Portefolio extends Model
{
    /**
     * @var string
     */
    protected $table = "portefolios";

    /**
     * disable created_at update_at
     * @var bool
     */
    public $timestamps = false;

}
