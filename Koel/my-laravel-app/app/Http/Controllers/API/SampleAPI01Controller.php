<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Question01RegistrationInformation;
use App\Models\Post;

class SampleAPI01Controller extends Controller
{
    private $comment;

    //// 【 コントロールにおける、コンストラクタの引数 】
    // 特に特別は工夫は不要みたい。Laravel の DIがいい感じにやってくれるっぽい。
    public function __construct(Comment $comment)
    {
        $this->comment = $comment->find(1);
        // $data = $comment->find(1);
// dd($a1);
// dump($data->toArray());

    }

    /**
     *
     *
     */
    public function index() {
        $data = $this->comment->toArray();

dump($data['id']);

        return response($data['body'], Response::HTTP_OK);
    }

    /**
     *
     *
     */
    public function sampleMethod(Request $request) {
        // $this->method01($request);
        // $this->method02($request);
        $this->method03($request);

        return;
    }

    /**
     * config
     */
    public function method01($request) {

        dump(config('myconfig01'));
        dump(config('myconfig01.param01'));
        dump(config('myconfig01.paramset01'));
        dump(config('myconfig01.paramset01.child01'));

        return;
    }

    /**
     *
     *
     */
    public function method02($request) {
        // dd(1);
        $a1 = Question01RegistrationInformation::find(2);
        dd($a1->toSql());    // find をしても、where句に条件が追加される訳じゃないんだぜ・・・
        dd($a1->toArray());  // ただ、データはちゃんと取れてる。

        // dd($a1->toSql());
        dd($a1->get()->first());

        // $a1 = Comment::find(1);
        // dd($a1->get()->toArray());
        // dd($a1->toSql());

        $data['body'] = null;
        return response($data['body'], Response::HTTP_OK);
    }


    /**
     *
     *
     */
    public function method03($request) {

        // $posts = Post::find(1)->comments();

// dd($posts->get()->toArray());

    }
}
