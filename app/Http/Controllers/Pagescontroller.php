<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Http\UploadedFile;


class Pagescontroller extends Controller
{
    public function posts(){
        $posts=Post::all();
        return view('content.posts',compact('posts'));
    }

    public function post(Post $post){
        // $post=DB::table('posts')->find($id);
         
        return view('content.post',compact('post'));
    }
    public function store(Request $request){
        
$this->validate(request() ,[
'title' => 'required',
'body'=>'required',
'url'=>'image|mimes:jpg,png,gif,jpeg',
]);


$image_name= time() . '.' . $request->url->getClientOriginalExtension();

        $post=new Post();
        $post->title=request('title');
        $post->body=request('body');
        $post->category_id=request('cat');
        $post->url=$image_name;
        $post->save();
        $request->url->move(public_path('upload'),$image_name);
        return redirect('/posts');
    }

    public function category($name){
        $cat=DB::table('categories')->where('name',$name)->value('id');
        $posts=DB::table('posts')->where('category_id',$cat)->get();
        return view('content.category',compact('posts'));
    }


}
