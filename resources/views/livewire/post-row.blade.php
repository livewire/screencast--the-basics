<tr @class(['archived' => $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>
        @unless($post->is_archived)
            <button
                type="button"
                wire:click="archive"
                wire:confirm="Are you sure you want to archive this Post?"
            >
                Archive
            </button>
        @endunless

        <button
            type="button"
            wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure you want to delete this Post?"
        >
            Delete
        </button>
    </td>
</tr>
