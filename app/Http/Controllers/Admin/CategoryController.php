<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function Laravel\Prompts\error;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $category = new category();

        $category->name = $request->name;
        $category->slug = str::slug($request->name);

        if(isset($request->image)){
            $imagename = rand().'-category.'.$request->image->extension();
            $request->image->move('admin/category/', $imagename);

            $category->image = $imagename ;
        }

        $category->save();
        toastr()->success('Category Created successfully');
        return redirect()->back();

    }
    
    
    public function list()
    {
        $categories = category::get();
        return view('admin.category.list', compact('categories'));
    }

    public function delete($id)
    {
        $category = category::find($id);

        toastr()->error('Category deleted successfully');
        $category->delete();
        return redirect()->back();
    }
}
