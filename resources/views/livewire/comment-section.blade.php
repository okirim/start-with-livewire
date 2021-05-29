<div>
    <form class="mt-18 ml-32" wire:submit.prevent="create">
        @csrf
        <input type="text" wire:model.defer="comment_body" class="rounded">
        <button  class="px-4 py-2 ml-2  rounded bg-blue-600 text-blue-100 disabled:opacity-50">create</button>
        <svg  wire:loading wire:target="create" class="animate-spin -ml-1 mr-3 h-5 w-5 text-red-500 bg-gray-800 rounded " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="32" cy="32" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
    </form>
    @foreach($comments as $comment)
        <div>
            <div>{{$comment->body}}</div>
            <div>{{$comment->created_at->diffForHumans()}}</div>
        </div>
    @endforeach
</div>
