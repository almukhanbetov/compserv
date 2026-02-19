<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = Category::where('type', 'service')->get();
        return view('admin.services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        $data['slug'] = Str::slug($data['title']);

        Service::create($data);

        return redirect()->route('admin.services.index');
    }

    public function edit(Service $service)
    {
        $categories = Category::where('type', 'service')->get();
        return view('admin.services.edit', compact('service','categories'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        $data['slug'] = Str::slug($data['title']);

        $service->update($data);

        return redirect()->route('admin.services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back();
    }
}
