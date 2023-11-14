<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function saveProducts(){
        return $this->create($data);
    }
    public function getProducts(){
        return $this->all();
    }
    public function deleteProducts(){
        $products = $this->find($id);
        return $this->delete();
    }
    public function updateProduct($id){
        return $this->find($id);
    }
    public function updatedProduct($id){
        $products ($id);
        $products->update($data);
    }

}
