 <?php


namespace App\Http\Controllers\Dashboard;



use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\Controller;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
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
        $posts = Post::paginate(2);
        //return redirect("/post/create");
        //return redirect()->route("post.create");
        //return to_route("post.create");
        return view('dashboard.post.index', compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::pluck('id', 'title');
        $post = new Post();

        echo view('dashboard.post.create', compact('categories', 'post'));


        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
        return to_route("post.index");

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
    {

        return view("dashboard.post.show", compact('post'));
        //
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {


        $categories = Category::pluck('id', 'title');
        echo view('dashboard.post.edit', compact('categories', 'post'));



        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {


        $post->update($request->validated());
        return to_route("post.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        echo "destroy";
        $post->delete();
        return to_route("post.index");
    }
}
