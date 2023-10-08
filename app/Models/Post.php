<?php

namespace App\Models;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Sushi;

    protected $rows = [
        ['id' => 1, 'title' => 'The Journey Begins', 'content' => 'Today marks the first day of my journey into blogging. I’m filled with a mix of excitement and nervous anticipation. What will I discover along this path? Stay tuned to find out.'],
        ['id' => 2, 'title' => 'A Stroll in the Park', 'content' => 'I took a leisurely stroll in the park today. The sun was shining, birds were singing, and the rustling leaves told tales of autumn’s arrival. It’s these simple moments that inspire my deepest reflections.'],
        ['id' => 3, 'title' => 'The Taste of Coffee', 'content' => 'There’s something magical about the first sip of coffee in the morning. The rich aroma, the warm mug cradled in my hands - it’s a ritual that never fails to center me. Today, I explore different brewing methods, each offering a unique taste experience.'],
        ['id' => 4, 'title' => 'Moonlit Musings', 'content' => 'Last night, I found myself gazing at the moon, lost in its silvery glow. It cast shadows that danced gracefully, weaving tales of ancient mystique. In that moment, I felt a deep connection to the universe, a sense of belonging that words can scarcely describe.'],
        ['id' => 5, 'title' => 'Rediscovering Art', 'content' => 'Art has a profound way of touching the soul. Today, I revisited some of my favorite pieces, each telling a story of different epochs, cultures, and emotions. In the brush strokes and chiseled marble, I found echoes of humanity’s timeless quest for expression and connection.'],
    ];

    protected $guarded = [];
}
