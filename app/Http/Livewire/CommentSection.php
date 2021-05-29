<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class CommentSection extends Component
{
    public Post $post;
    public $comment_body;

    protected $rules = ['comment_body' => 'required'];

    public function updated($property)
    {
        $this->validateOnly($property);
    }


    public function create()
    {

        $this->validate();
        $userId = User::factory()->create()->id;
        sleep(2);
        $comment = Comment::create(
            ['body' => $this->comment_body,
                'post_id' => $this->post->id,
                'user_id' => $userId]);
        $this->comment_body = '';
        $this->post = Post::find($comment->post_id);
    }

    public function render()
    {
        $comments = Comment::where('post_id', $this->post->id)->orderBy('created_at', 'desc')->get();
        return view('livewire.comment-section', [
            'comments' => $comments
        ]);
    }
}
