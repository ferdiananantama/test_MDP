<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //get all Category
    public function index(Request $request) {
        $categories = Category::paginate(10);
        return view('pages.category.index', compact('categories'));
    }

    //create Category
    public function create(){
        return view('pages.category.create');
    }

    //add new Category
    public function store(Request $request){
        $request->validate([
            'name_categories'=> 'required',
        ]);

        //request input DB
        $categories = new Category;
        $categories->name_categories = $request->name_categories;
        $categories->save();

        return redirect()->route('categories.index')->with('success', 'Category berhasil ditambahkan');
    }

    //link to pages edit
    public function edit($id){
        $categories= Category::find($id);
        return view('pages.category.edit', compact('categories'));
    }

    //update category
    public function update(Request $request, $id){
        $request->validate([
            'name_categories' => 'required',
        ]);

        //request update DB
        $categories = Category::find($id);
        $categories->name_categories = $request->name_categories;
        $categories->save();

        return redirect()->route('categories.index')->with('success', 'Category berhasil diubah');
    }

    //delete Data
    public function destroy($id){
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('categories.index')->with('success', 'Category berhasil dihapus');
    }
}
