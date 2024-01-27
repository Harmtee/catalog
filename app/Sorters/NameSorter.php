<?php
namespace App\Sorters;

use App\Interfaces\SorterInterface;

class NameSorter implements SorterInterface{
    public function sort(array $data): array {
        usort($data, fn ($a, $b) => strcasecmp($a['name'], $b['name']));
        return $data;
    }
}