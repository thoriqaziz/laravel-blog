<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use App\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class FrontEndController extends Controller
{
    public function index()
    {
        //dd(request('page'));
        if (request()->has('category')) {
            $posts = Post::where('category_id', request('category'))->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        }

        //dd($posts);

        return view('index')
            ->with('title', 'Thoriq Aziz\'s Blog')
            ->with('posts', $posts)
            ->with('user', User::first());
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
            ->with('title', $post->title)
            ->with('categories', Category::take(5)->get())
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($prev_id))
            ->with('tags', Tag::all())
            ->with('user', User::first());
    }

    public function category()
    {
        $category = Category::find(request('id'));
        $posts = Post::where('category_id', request('id'))->orderBy('created_at', 'desc')->paginate(6);

        return view('category')->with('category', $category)
            ->with('title', 'Category: ' . $category->name)
            ->with('posts', $posts)
            ->with('user', User::first());
    }

    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')->with('tag', $tag)
            ->with('title', $tag->tag)
            ->with('categories', Category::take(5)->get());
    }

    public function about()
    {
        return view('about')->with('tags', Tag::all())
            ->with('title', 'About')
            ->with('user', User::first());
    }

    public function subscribe(Request $request)
    {
        $email = $request->email;

        $arr = [
            'properties' => [
                [
                    'property' => 'firstname',
                    'value' => $email
                ],
                [
                    'property' => 'lastname',
                    'value' => ''
                ],
                [
                    'property' => 'phone',
                    'value' => ''
                ],
                [
                    'property' => 'email',
                    'value' => $email
                ],
            ]
        ];
        $post_json = json_encode($arr);

        $endpoint = 'https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/'. $email . '/?hapikey=' . env('HUBSPOT_API_KEY');
        //'https://api.hubapi.com/contacts/v1/contact?hapikey=' . env('HUBSPOT_API_KEY');
        $client = new Client(['verify' => 'C:\xampp\php\extras\ssl\cacert.pem']);

        $res = $client->request('POST', $endpoint, [
            'headers' => [
                'content-type' => 'application/json'
            ],
            'body' => $post_json
        ]);

        toastr()->success('You successfully subscribed.');

        return redirect()->back();
    }
}
