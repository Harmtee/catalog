<?php

namespace App\Sorters;

use App\Interfaces\SorterInterface;


/**
 * Class SalesPerViewSorter
 * 
 * This class implements the SorterInterface and is responsible for sorting items based on their sales per view.
 */
class SalesPerViewSorter implements SorterInterface
{
    /**
     * Sorts an array of data based on sales per view.
     *
     * @param array $data The array of data to be sorted.
     * @return array The sorted array.
     */
    public function sort(array $data): array
    {
        usort($data, function ($a, $b) {
            $a_ratio = $a['sales_count'] / $a['views_count'];
            $b_ratio = $b['sales_count'] / $b['views_count'];
            return $a_ratio <=> $b_ratio;
        });
        return $data;
    }
}
