<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $categories = $request->input('categories');

        $priceFrom = $request->input('price_from');
        $priceTo = $request->input('price_to');

        if ($id) {
            $product = Product::with('category', 'galleries')->find($id);

            if ($product) {
                return ResponseFormatter::success(
                    $product,
                    'Data Produk Berhasil Diambil'
                );
            }
            else {
                return ResponseFormatter::error(
                    null,
                    'Data Produk Tidak Ada',
                    404
                );
            }
        }

        $product = Product::with('category', 'galleries');

        if ($name) {
            $product->where('name', 'like', '%' . $name . '%');
        }

        if ($description) {
            $product->where('description', 'like', '%' . $description . '%');
        }

        if ($tags) {
            $product->where('tags', 'like', '%' . $tags . '%');
        }

        if ($priceFrom) {
            $product->where('price', '>=', $priceFrom);
        }

        if ($priceTo) {
            $product->where('price', '<=', $priceTo);
        }

        if ($categories) {
            $product->where('categories', $categories);
        }

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data Produk Berhasil Diambil'
        );
    }
}
