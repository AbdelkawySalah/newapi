<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;


use Illuminate\Validation\Rule;

class PostController extends Controller
{
    use ApiResponseTrait;

// public function index()
// {
//     $posts=post::get();
//     // return $posts;
//     $data=[
//         'posts'=>$posts,
//         'status'=>200,
//         'msg'=>'ok'
//     ];
//     return response($data);
// }


    public function index(){
        if(auth()->user()->role=='admin')
        {
            $posts = Post::select('id','title as title','body as aa')->orderby('id','DESC')->get();
             if($posts)
             {
                return $this->apiResponse($posts,'ok',200);
             }
             else{
                return $this->apiResponse("",'not data found',404);
             }

        }
        else return $this->apiResponse("",'not admin',401);
    }


public function show($id)
{
    // $posts=Post::find($id);
    $posts=Post::where('id',$id)->select('id','title as tit','body as dd')->first();

    if(!is_null($posts)) 
    {
        return $this->apiResponse($posts,'ok',200);
    }
    else 
    {
        return $this->apiResponse(null,'The Post Not Found',401);
    }
    

  
}

public function store(Request $request)

{
   
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:22',
        'body'=>'required',
       ]);
  if($validator->fails())
  {
       // return response()->json($validator->errors()->toJson(), 400);
      return $this->apiResponse('',$validator->errors(), 400);
 }

      

     
 

    //first soultion
       /* $post=new post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save(); */

   //second sloution
    $post=post::create($request->all());
    if($post) return $this->apiResponse('','data add succesful',201); else  return $this->apiResponse('','error in add succesful',400);
//bad request 400
 

  

}


public function update(Request $request,$id)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:22',
        'body'=>'required',
       ]);
  if($validator->fails())
  {
       // return response()->json($validator->errors()->toJson(), 400);
      return $this->apiResponse('',$validator->errors(), 400);
 }
    
    $post=Post::find($id);
    if($post)
    {
        // $post->title=$request->title;
        // $post->body=$request->body;
        // $post->save();
        $post->update($request->all());
        return $this->apiResponse('','data updated',201);
    }
    else{
        return $this->apiResponse('','post not found',400);
    }
    
    
}


public function destroy($id)
{
    $post=Post::find($id);
    if($post) 
    {
        $post->delete();
        // Post::destroy($id);
        return $this->apiResponse('','Post deleted succesful',201);
    }
     else return $this->apiResponse('','Id not found',404);
}






    // public function show($id){

    //     $post = Post::find($id);

    //     if($post){
    //         return $this->apiResponse($post,'ok',200);
    //     }

    //     return $this->apiResponse(null,'The Post Not Found',401);

    // }
}
