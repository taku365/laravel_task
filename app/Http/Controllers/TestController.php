<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        //==============
        // Eloquent(エロクアント)
        //==============

        // testsテーブルの全レコードを取得
        // 実際には「SELECT * FROM tests」を実行している
        // 返り値：Collection（Testモデルの集合）
        $values = Test::all();


        // testsテーブルの総レコード数を取得
        // 実際には「SELECT COUNT(*) FROM tests」を実行している
        // 返り値：整数（int）
        $count = Test::count();


        // id=1 のレコードを1件取得
        // 実際には「SELECT * FROM tests WHERE id = 1 LIMIT 1」
        // 返り値：Testモデルのインスタンス（単体）
        // もし見つからなければ、自動で404エラーを発生させる
        $first = Test::findOrFail(1);


        // textカラムが 'bbb' のレコードを検索
        // 実際には「SELECT * FROM tests WHERE text = 'bbb'」
        // get()を付けることで検索を実行する
        // 返り値：Collection（0件以上のTestモデル）
        $whereBBB = Test::where('text', '=', 'bbb')->get();


        //==============
        // クエリビルダ
        //==============

        $queryBuilder  = DB::table('tests')->where('text', '=', 'bbb')
            ->select('id', 'text')
            ->get();



        // デバッグ用
        // それぞれの中身を表示して処理を停止する
        // ① 全件コレクション
        // ② 件数（整数）
        // ③ 単体のTestモデル
        // ④ 条件検索結果のコレクション
        dd($values, $count, $first, $whereBBB, $queryBuilder);

        // tests/test.blade.php を表示し、
        // $values をビュー側に渡す
        return view('tests.test', compact('values'));
    }
}
