<?php $post = TCG\Voyager\Models\Post::first(); ?>

@can('browse', $post)

I can browse posts

@else

I cannot browse posts

@endcan