<?php

namespace App\Http\Controllers;

use App\Models\UserEntry;
use Illuminate\Http\Request;

class UserEntryController extends Controller
{
    public function index()
    {
        // $all = UserEntry::all();
        // dd($all);

        // 先頭を取得
        // $entry = UserEntry::first();

        // ID = 2を取得
        // $entry = UserEntry::find(2);

        // 存在しないIDを指定した場合
        // $entry = UserEntry::find(999); // nullになる

        // whereを利用してID指定
        // $entry = UserEntry::where('id', 2)->get(); //ID=2のCollectionが表示

        // $entry = UserEntry::where('id', 2)->first();

        // whereでidが2より大きいものを取得
        $entry = UserEntry::where('id', '>', 2)->get();

        dump($entry);
    }

    public function detail($id)
    {
        $item = UserEntry::find($id);
        return view('user_entry_detail', ['item' => $item]);
    }
}
