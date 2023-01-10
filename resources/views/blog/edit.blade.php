<?php $route = route('blog.update',$blog); ?>
@include('blog._form',
    [   
        'blog' => $blog,
        'title'=>"Update Blog",
        'method' =>"PATCH",
        'route' => $route,
        'btn'=>"Update"
    ]
)
