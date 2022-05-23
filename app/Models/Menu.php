<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Menu extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;
    public function getParentKeyName()
    {
        return 'menu_superior';
    }

}
