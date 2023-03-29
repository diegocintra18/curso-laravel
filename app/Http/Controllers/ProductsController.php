<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrUpdateProductsRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Products::rightJoin("brands", "products.brand_id", "=", "brands.id")
        // ->select(
        //     "products.id",
        //     "products.name",
        //     "sku",
        //     "brand_id",
        //     "brands.name as brand_name"
        // )
        // ->get();

        $products = Products::get();
        $products = Products::get();

        return view("products.index", ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrUpdateProductsRequest $request)
    {
        // $data = $request->validate([
        //     "product_name" => "string|required|min:3|max:100",
        //     "sku" => "integer"
        // ]);

        $data = $request->all();

        //$product = Products::create($data);

        $product = new Products();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->product_description = $request->product_description;

        $product->save();

        dd($product);

        return redirect()->back()->with("error", "Erro ao cadastrar o produto");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = [
            0 => [
                "product_name" => "Produto 1",
                "sku"          => "123",
                "description"  => "Exemplo de descricção"
            ],
            1 => [
                "product_name" => "Produto 2",
                "sku"          => "456",
                "description"  => "Exemplo de descricção"
            ],
            2 => [
                "product_name" => "Produto 3",
                "sku"          => "789",
                "description"  => "Exemplo de descricção"
            ]
        ];

        return view("products.show", ["product" => $products[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);

        return view("products.edit", ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrUpdateProductsRequest $request, $id)
    {
        $product = Products::where("id", $id)->update([
            "name" => $request->name,
            "product_description" => $request->product_description
        ]);
        dd($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::where("id", $id)->delete();
        return "Registro deletado com sucesso!";
    }
}
