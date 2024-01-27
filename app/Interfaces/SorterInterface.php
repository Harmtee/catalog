<?php

namespace App\Interfaces;

interface SorterInterface {
    public function sort(array $data): array;
}