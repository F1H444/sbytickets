<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata = Wisata::latest()->get();
        return view('admin.wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'required|string',
            'base_price_weekday' => 'required|numeric',
            'base_price_weekend' => 'required|numeric',
            'capacity_per_day' => 'required|integer',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->name);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/wisata'), $filename);
            $validated['image_url'] = 'images/wisata/' . $filename;
        }

        Wisata::create($validated);

        return redirect()->route('admin.wisata.index')->with('success', 'Wisata berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wisata $wisata)
    {
        return view('admin.wisata.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wisata $wisata)
    {
        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'required|string',
            'base_price_weekday' => 'required|numeric',
            'base_price_weekend' => 'required|numeric',
            'capacity_per_day' => 'required|integer',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_active' => 'boolean',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($request->name);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($wisata->image_url && file_exists(public_path($wisata->image_url))) {
                @unlink(public_path($wisata->image_url));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/wisata'), $filename);
            $validated['image_url'] = 'images/wisata/' . $filename;
        }

        $wisata->update($validated);

        return redirect()->route('admin.wisata.index')->with('success', 'Wisata berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wisata $wisata)
    {
        if ($wisata->image_url && file_exists(public_path($wisata->image_url))) {
            @unlink(public_path($wisata->image_url));
        }

        $wisata->delete();

        return redirect()->route('admin.wisata.index')->with('success', 'Wisata berhasil dihapus.');
    }
}
