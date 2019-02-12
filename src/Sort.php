<?php
// Algoritmo para ordenação por inserção
namespace Wouerner;

final class Sort
{
    public function insert($data)
    {
        foreach ($data as $key => $value) {
            $j = $key;

            while ($j >= 0 && (($j-1) >= 0 && $data[$j-1] > $value)) {
                $data[$j] = $data[$j-1];
                $j--;
            }

            $data[$j] = $value;
        }
        return $data;
    }
}
