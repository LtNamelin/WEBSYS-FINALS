<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $returnType = '\App\Entities\Product';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'name',
        'description',
        'price',
        'image',
        'category',
        'is_available'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
