<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog', [
            'posts' => $this->posts()->values(),
        ]);
    }

    public function show(string $blog): View
    {
        $id = (int) $blog;

        $byId = $this->posts()->keyBy('id');
        $post = $byId->get($id);
        abort_if($post === null, 404);

        $related = collect($post['related_ids'])
            ->map(fn (int $relatedId) => $byId->get($relatedId))
            ->filter()
            ->values();

        return view('pages.blog-show', [
            'post' => $post,
            'related' => $related,
        ]);
    }

    private function posts(): Collection
    {
        return collect(config('blog.posts', []));
    }
}
