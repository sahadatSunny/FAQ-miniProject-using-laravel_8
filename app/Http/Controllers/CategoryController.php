<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;

class CategoryController extends Controller
{

    public function index(){
        $cat = Category::all();
        return view('index', ['category' => $cat]);
    }

    public function admin_index(){
        $cat = Category::all();
        return view('admin.admin-index', ['category' => $cat]);
    }

    public function show($id){
        $sltCat = Category::find($id);
        return view('admin.show', ['sltCategory' => $sltCat]);
    }

    public function create_cat(){
        request()->validate([
            'category' => 'required',
        ]);

        Category::create([
            'category' => request('category'),
            'priority' => request('setPriority'),
        ]);

        return redirect('/admin')->with('success','Category created');;
    }

    public function delete($id){

        Category::destroy($id);

        return redirect('/admin')->with('success', 'Category has been deleted successfully');

    }

    public function update(Category $id){
       request()->validate([
           'categoryEdit' => 'required',
       ]);

       $id->update([
           'category' => request('categoryEdit'),
           'priority' => request('priority'),
       ]);

       return redirect('/admin')->with('success','Category updated successfully');;
    }


    // public function add(){

    //     $cat = new Category();
    //     $cat->category = 'Navigation';
    //     $cat->priority = 2;
    //     $cat->save();

    // }

}
