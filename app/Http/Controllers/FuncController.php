<?php

namespace App\Http\Controllers;

use App\Models\MaterialType;
use App\Models\ProductType;
use Illuminate\Http\Request;


class FuncController extends Controller
{
    public function calculate(ProductType $productType, MaterialType $materialType, int $availableMaterial, float $p1, float $p2): int {
        try {
            if ($availableMaterial <= 0 || $p1 <= 0 || $p2 <= 0) {
                return -1;
            }
            $productType = ProductType::findOrFail($productTypeId);
            $materialType = MaterialType::findOrFail($materialTypeId);

            // Расчёт необходимого сырья на единицу продукции
            $rawPerProduct = $p1 * $p2 * $productType->coefficient;

            // Учет потерь материала
            $lossPercent = $materialType->loss;
            $rawWithLoss = $rawPerProduct * (1 + $lossPercent / 100);

            // Вычисляем максимальное количество
            $productionCount = floor($availableMaterial / $rawWithLoss);

            return $productionCount >= 0 ? (int)$productionCount : 0;

        } catch (\Exception $e) {
            return -1;
        }
    }
}

