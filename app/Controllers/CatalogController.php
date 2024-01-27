<?php

namespace App\Controllers;

use App\Models\Catalog;
use App\Sorters\NameSorter;
use App\Sorters\SalesPerViewSorter;
use App\Sorters\PriceSorter;

class CatalogController extends Controller
{
    public function show()
    {
        $products = include __DIR__ . '/../../products.php';
        $this->render('catalog', ['products' => $products, 'sort' => 'Unsorted']);
    }

    public function priceSort()
    {
        $products = include __DIR__ . '/../../products.php';
        $catalog = new Catalog($products);
        $this->render('catalog', ['products' => $catalog->getProducts(new PriceSorter()), 'sort' => 'Price sorted']);
    }

    public function salesPerViewSort()
    {
        $products = include __DIR__ . '/../../products.php';
        $catalog = new Catalog($products);
        $this->render('catalog', ['products' => $catalog->getProducts(new SalesPerViewSorter()), 'sort' => 'Sales per view sorted']);
    }

    /**
     * To test the extensibility of the code, I added a new sorter and its corresponding action.
     * Sorts the products by name.
     */
    public function nameSort()
    {
        $products = include __DIR__ . '/../../products.php';
        $catalog = new Catalog($products);
        $this->render('catalog', ['products' => $catalog->getProducts(new NameSorter()), 'sort' => 'Name sorted']);
    }
}
