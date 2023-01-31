<?php
namespace App\Models;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    use Translatable;

    protected  $table = 'items';
    protected $translatable = ['name', 'description'];

}
