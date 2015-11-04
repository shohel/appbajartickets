
<?php $ticket = unserialize($ticket);?>

@extends($email)

@section('subject')

@stop

@section('link')
    <a style="color:#ffffff" href="{{ route($setting->grab('main_route').'.show', $ticket->id) }}">

    </a>
@stop

@section('content')
    {!! trans('ticketit::email/comment.data', [
        'name'      =>  $ticket->user_name,
        'subject'   =>  $ticket->subject,
        'status'    =>  $ticket->status->name,
        'category'  =>  $ticket->category->name,
        'comment'   =>  $comment->content
    ]) !!}
@stop
