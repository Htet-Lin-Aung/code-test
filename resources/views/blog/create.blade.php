<?php $route = route('blog.store'); ?>
@include('blog._form',
    [   
        'blog' => "",
        'title'=>"Create Blog",
        'method' =>"POST",
        'route' => $route,
        'btn'=>"Submit"
    ]
)