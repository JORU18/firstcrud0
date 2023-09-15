<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Http\Request;
// // use Illuminate\Support\Facades\Validator;
// use illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$posts=Post::paginate(2);


return view('dashboard.post.index',compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $categories=Category::pluck('id','title');
       
        
        echo view('dashboard.post.create',compact('categories'));


        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {   
        Post::create($request->validated());

        //solo pasan los datos que se validen
        // $validated=$request->validate([
        //     "title"=>"required|min:5|max:500",
        //     "slug"=>"required|min:5|max:500",
        //     "content"=>"required|min:7",
        //     "description"=>"required|min:7",
        //  
  
        //     "category_id"=>"required|integer"

        // ]);
        // dd($validated);


        // $validated=$request->validate(StoreRequest::myRules());
        // dd($validated);


        // $validated=Validator::make($request->all(),StoreRequest::myRules());
        // // dd($validated->errors());
        // dd($validated->fails());

//        $data=$request->validated();
//        $data['slug']=Str::slug($data['title']);
// dd($data);

    // $data = array_merge($data,['image' => '']);
   

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {      echo "show";
        //
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post) 
    {   

        
  $categories=Category::pluck('id','title');
  echo view('dashboard.post.edit',compact('categories','post'));
    


        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {


$post->update($request->validated());

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //

        echo "DESTROY";
    }
}
