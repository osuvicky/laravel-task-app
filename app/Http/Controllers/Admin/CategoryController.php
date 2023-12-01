<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(2);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/categories');

            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $path
            ]);

            return redirect()->route('admin.categories.index')->with('success', 'Category Created.');
        }else{
            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                
            ]);

            return redirect()->route('admin.categories.index')->with('success', 'Category Created.');
        }
        
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/categories');

            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $path
            ]);

            return redirect()->route('admin.categories.index')->with('success', 'Category Updated with Image.');
        }else{
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ]);
            return redirect()->route('admin.categories.index')->with('success', 'Category Updated.');
        }

    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('error', 'Category Deleted.');

    }

    public function delete(Request $request)
    {
        $category = Category::find($request->category_id);
        if($category){
            $destination = ('.'.Storage::url($category->image));
            if(File::exists($destination)){
                File::delete($destination);
            }
            $category->delete();

            return redirect()->route('admin.categories.index')->with('error', 'Category Deleted.');
        }else{
                   
        return redirect()->route('admin.categories.index')->with('error', 'Category Deleted.');
        }

    }
}
