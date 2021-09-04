<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantOption extends Model
{
    use HasFactory, SoftDeletes;

    public function variantType()
    {
        // one variant option only belongs to one variant type
        return $this->belongsTo(VariantType::class, 'product_variant_id', 'id');
    }

    protected $fillable = [
        'variant_value_name',
    ];

    protected $table = "products_variants_options";
}
