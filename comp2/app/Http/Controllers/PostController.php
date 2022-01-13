<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function show()
    {
        // $this->authorize('admin');
        return view('home', [
            // 'posts' => Post::latest()->filter(request(['search']))->get()
            'posts' => Post::latest()->filter(request(['search']))->paginate(6)->withQueryString(),
            'categories'=>Category::all()
        ]);
    }

    public function display(Category $category){
        return view('home-category',[
            'posts'=>$category->post,
            'categories'=>Category::all(),
            'currentCategory'=>$category
    
        ]);
    }

    public function create(){

        // if(auth()->guest()){
        //     abort(Response::HTTP_FORBIDDEN);
        // }

        //Taken to middleware
        // if(auth()->user()?->email != 'saurav1234594@gmail.com'){// adding ? will remove the above if statement
        //     abort(Response::HTTP_FORBIDDEN);
        // }
        return view('addProduct');
    }

    public function store(){
        // ddd(request()->all());
        $attributes = request()->validate([
            'category_id'=>['required',Rule::exists('categories','id')],
            'title'=>['required',Rule::unique('posts','title')],
            'firstname'=>'required',
            'surname'=>'required',
            'price'=>'required',
            'pages'=>'required'
        ]);
        

        Post::create($attributes);

        return redirect('/');
    }

}
