<?php

namespace App\Service\Product;

use App\Service\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface {
    public function getRelatedProducts($product,$limit = 4);
    public function getFeaturedProducts();
    public function getProductOnIndex($req);
    public function getProductByCategory($alias, $req);
}