<?php

namespace App\Models;

use App\Interfaces\SorterInterface;

/**
 * Class Catalog
 * 
 * Represents a catalog of items.
 */
class Catalog {
    private $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * Retrieves the products from the catalog.
     *
     * @param SorterInterface $sorter The sorter used to sort the products.
     * @return array An array of products.
     */
    public function getProducts(SorterInterface $sorter): array {
        return $sorter->sort($this->products);
    }

    /**
     * Retrieves the unsorted original products from the catalog.
     *
     * @return array An array of unsorted products.
     */
    public function getUnsortedProducts(): array {
        return $this->products;
    }

}
