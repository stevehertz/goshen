<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{

    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->middleware('auth');
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->categoryRepository->getAllCategories();
        return view('backend.categories.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.categories.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
        $data = $request->except("_token");

        if ($request->hasFile('image')) {
            $image = $request->file('image');
        } else {
            $image = null;
        }

        $category = $this->categoryRepository->storeCategory($data, $image);
        if($category)
        {
            return response()->json([
                'status' => true,
                'message' => 'Successfully saved category'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return response()->json([
            'status' => true,
            'data' => $this->categoryRepository->show($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category = $this->categoryRepository->destroyCategory($category);
        if($category)
        {
            return response()->json([
                'status' => true,
                'message' => 'Successfully deleted category'
            ]);
        }
    }
}
