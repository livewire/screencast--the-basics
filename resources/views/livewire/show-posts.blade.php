<div>
    <h2>Posts:</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <livewire:post-row :key="$post->id" :$post>
            @endforeach
        </tbody>
    </table>
</div>
