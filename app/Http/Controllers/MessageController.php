<?php namespace App\Http\Controllers;

use Request;
use Response;
use App\Models\Message;

class MessageController extends Controller {

    public function getListFromDB()
    {
        $page = Request::input('page', 1);
        $size = Request::input('size', 10);


        return Message::skip(($page - 1) * $size)->take($size)->orderBy('id')->get();
    }

    public function getList()
    {
        return [
            [
                'id' => 1,
                'name' => 'test name',
                'description' => 'test description',
                'likes_count' => 10,
            ],
        ];
    }

    public function addToDB()
    {
        $message = Message::create([
            'name' => Request::input('name'),
            'description' => Request::input('description'),
            'likes_count' => (int)Request::input('likes_count'),
        ]);

        return $message;
    }

    public function add()
    {
        return Request::all();
    }

}
