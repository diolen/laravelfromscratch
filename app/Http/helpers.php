<?php

function delete_song($routeParams, $label = 'Delete song')
{
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);
    $form .= Form::submit($label, ['class' => 'btn btn-danger']);
    
    return $form .= Form::close();
}