<?php

namespace App\Http\Controllers;

use App\Domain\Product\Models\Product;
use Illuminate\Routing\Controller;

/**
 * Контроллер для управления товарами
 */
class ProductController extends Controller
{

    /**
     * Список товаров.
     * @return array
     */
    public function list()
    {
        return Product::query()->get();
    }

    /**
     * Информация о товаре
     * @param $id
     * @return array
     */
    public function info($id)
        {
            return Product::query()->where(['id' => $id])->first();
        }
}
