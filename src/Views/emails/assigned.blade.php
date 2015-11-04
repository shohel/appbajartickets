<?php $notification_owner = unserialize($notification_owner);?>
<?php $ticket = unserialize($ticket);?>

@extends($email)

@section('subject')
	{{ trans('ticketit::email/globals.assigned') }}
@stop

@section('link')
	<a style="color:#ffffff" href="{{ route(Request::segment(1).'.'.$setting->grab('main_route').'.show', $ticket->id) }}">
		{{ trans('ticketit::email/globals.view-ticket') }}
	</a>
@stop

@section('content')
	{!! trans('ticketit::email/assigned.data', [
		'name'      =>  $notification_owner->user_name,
		'subject'   =>  $ticket->subject,
		//'status'    =>  $ticket->status->name,
		'category'  =>  $ticket->category->name
	]) !!}
@stop
