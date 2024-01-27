<?php

namespace App\Sorters;

use App\Interfaces\SorterInterface;

class PriceSorter implements SorterInterface
{
    /**
     * Sorts an array by the 'price' value.
     *
     * @param array $data The array to sort.
     * @return array The sorted array.
     */
    public function sort(array $data): array
    {
        usort($data, fn ($a, $b) => $a['price'] <=> $b['price']);
        return $data;
    }
}
