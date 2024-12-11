<?php

namespace App\View\Components\Frontend;

use App\Models\Blog\Post;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecentPost extends Component
{
    public function render(): View
    {
        $blogs = Post::latest('created_at')->take(3)->get();
        return view('components.frontend.recent-post',[
            'blogs'=>$blogs
        ]);
    }
}
