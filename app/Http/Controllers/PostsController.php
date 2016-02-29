<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Post;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use Input;
use Image;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::where('res_id', '=', '0')
            ->latest('updated_at')
            ->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        //        $post = Post::findOrFail($id);
        $posts = Post::where('post_id', '=', $id)->get();
        return view('posts.show', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(PostRequest $request){
        //        Post::create($request->all());
        $this->post = new Post();
        $this->post->fill($request->all());

        $tmp_post_id = $_POST['post_id'];
        if ( $tmp_post_id == '-1') { //新規作成
            $this->post->post_id = Post::max('post_id') + 1;
            $this->post->res_id = 0;
        } else {
            $this->post->post_id = $tmp_post_id;
            $this->post->res_id = Post::where('post_id', '=', $tmp_post_id)->max('res_id') + 1;
        }

        if($this->post->contributor == null || $this->post->contributor == "") {
            $this->post->contributor = 'No name';
        }
        $image = Input::file('data');
        if(!empty($image)) {
            $this->post->fig_mime = $image->getMimeType();
            switch ($this->post->fig_mime) {
            case "image/jpeg": $flag = TRUE; break;
            case "image/png": $flag = TRUE; break;
            case "image/gif": $flag = TRUE; break;
            default: $flag = FALSE;
            }
            if ($flag == FALSE) {
                \Flash::error('アップロード可能な画像ファイルは jpg, png, gif のみです。');
                return redirect()->back();
            }

            $name = md5(sha1(uniqid(mt_rand(), true))).'.'.$image->getClientOriginalExtension();
            $upload = $image->move('media', $name);

            #サムネイル作成
            Image::make('media/'.$name)
                ->resize(400, 400)
                ->save('media/mini/'.$name);
            $this->post->fig_name = $name;
//            $this->post->fig_orig = file_get_contents($image);
        }

        $this->post->save();
        \Flash::success('記事が投稿されました。');

        if ( $tmp_post_id == '-1') { //新規作成
            return redirect()->route('posts.index');
        }
        return redirect()->route('posts.show', [$tmp_post_id]);

    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request){
        $post = Post::findOrFail($id);
        $post->update($request->all());
        \Flash::success('記事を更新しました。');
        return redirect()->route('posts.show', [$post->pots_id]);
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        \Flash::success('記事を削除しました。');
        return redirect()->route('posts.index');
    }
}
