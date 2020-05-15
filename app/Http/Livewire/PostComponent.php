<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;

class PostComponent extends Component
{
    public $posts, $title, $description, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->posts = Post::all();

        return view('livewire.posts.component');
    }

    private function resetInput()
    {
        $this->title = null;
        $this->description = null;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        Post::create([
            'title' => $this->title,
            'description' => $this->description
        ]);

        $this->resetInput();

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $this->selected_id = $id;
        $this->title = $post->title;
        $this->description = $post->description;

        $this->updateMode = true;

    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'title' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        if ($this->selected_id) {
            $post = Post::find($this->selected_id);

            $post->update([
                'title' => $this->title,
                'description' => $this->description
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $post = Post::where('id', $id);
            $post->delete();
        }
    }
}
