<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\City;
use App\Purchase;
use App\Account;
use App\Country;
use App\Category;

class CategoryController extends Controller
{
    protected $data = [];

    public function __construct()
    {
       $this->data['countpurchases'] = Purchase::count();
       $this->data['totalearn'] = Purchase::sum('price');
       $this->data['countuser'] = User::count();

       return $this->data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(6);
        return view('pages.category.admin-categories',compact('categories'), $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.category.create-category', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'name' => 'required|min:3|unique:categories',
        ],
        [
            'name.required' => 'Category is required',
            'name.unique' => 'Name alredy exists',
        ]);

        $category = new Category();
        $category ->name = request()->name;
       

        try{
            $category->save();
            return redirect()->back()->with('success', 'You created category successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id) ?? abort(404);
        
        return view('pages.category.edit-category', compact('category'),$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $category = Category::find($id) ?? abort(404);

        $category->name = request()->name;

        
        try{
            $category->save();
            return redirect()->back()->with('success', 'You update category successfully');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        
    }
}
