<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index(){
        return view('index',[
            'posts'=>Post::paginate(50)
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
            'firstname'=>'',
            'surname'=>'required',
            'price'=>'required',
            'pages'=>'required'
        ]);
        

        Post::create($attributes);

        return redirect('/');
    }

    public function edit(Post $post){
        return view('edit',['post'=>$post]);
    }

    public function update(Post $post){
        $attributes = request()->validate([
            'category_id'=>['required',Rule::exists('categories','id')],
            'title'=>['required',Rule::unique('posts','title')->ignore($post->id)],
            'firstname'=>'',
            'surname'=>'required',
            'price'=>'required',
            'pages'=>'required'
        ]);


        $post->update($attributes);

        return back()->with('success','Post Updated');
    }

    public function destroy(Post $post){
        $post->delete();

        return back()->with('success','Post Deleted');
    }
}
