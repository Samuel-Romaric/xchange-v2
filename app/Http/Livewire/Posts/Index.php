<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = "";

    public $post;

    protected $listeners = ['researchUpdated'];

    public function mount()
    {
        $this->post = new Post();
    }

    public function researchUpdated($research)
    {
        $this->search = $research;
        $this->resetPage();
    }

    public function openModalEditPost($url, $id)
    {
        $title = $this->post->where('id', $id)->first()->title;
        $content = $this->post->where('id', $id)->first()->content;

        $this->dispatchBrowserEvent('edit-post', ['url' => $url, 'title' => $title, 'content' => $content]);
    }

    public function openModalDeletePost($url, $title)
    {
        $this->dispatchBrowserEvent('delete-post', ['url' => $url, 'title' => $title]);
    }

    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.posts.index', compact('posts'));
    }
}
