<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view('index',$data);
    }

    public function getProduct()
    {
        $data['products'] = Product::all();
        echo json_encode($data);
    }

    public function storeProduct(Request $request)
    {
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desccription'] = $request->product_desccription;
        $image = $request->file('product_image');
        if($image){
            $fileformat = 'product_image/' . $image->getClientOriginalName();
            if ($image->move('product_image/', $fileformat)) {
                $path = $fileformat;
            }
            $data['product_image'] = $path;
        }
        
        if($request->id){
            Product::where('id',$request->id)->update($data);
        } else {
            Product::create($data);
        }
        
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function editProduct($id)
    {
        $data['products'] = Product::whereId($id)->first();
        echo json_encode($data);
    }

    public function deleteProduct($id)
    {
        $data = Product::whereId($id)->delete();
        if($data){
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data inserted successfully'
                ]
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                ]
            );
        }
    }
}
