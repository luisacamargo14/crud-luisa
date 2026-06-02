<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProuctsController extends Controller
{

    public function create()
    {
        return view('products.create');
    }

    
    public function store(Request $request)
    {
       $validated = $request->validate([
            'name'=> 'required|string',
            'description'=> 'required|string',
            'price'=> 'required|numeric',
        ]);

        // Imagen automática tipo avatar
        $name = $validated['name'];

        $bg = ltrim(fake()->hexColor(), '#');
        $color = 'ffffff';

        $initials = collect(explode(' ', $name))
            ->map(fn ($word) => strtoupper(substr($word, 0, 1)))
            ->implode('+');

        $imagen = "https://ui-avatars.com/api/?background={$bg}&color={$color}&name={$initials}";

        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'imagen' => $imagen,
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
