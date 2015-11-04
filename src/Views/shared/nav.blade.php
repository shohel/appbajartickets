<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills">

            <li role="presentation" class="{!! Request::is(Request::segment(1).'/'.$setting->grab('main_route')) ? "active" : "" !!}">
                <a href="{{ route('home').'/'.$setting->grab('main_route') }}">{{ trans('ticketit::lang.nav-active-tickets') }}
                    <span class="badge">
                        {{ $u->getTickets(false)->count() }}
                    </span>
                </a>
            </li>
            <li role="presentation" class="{!! Request::is(Request::segment(1).'/'.$setting->grab('main_route').'/complete') ? "active" : "" !!}">
                <a href="{{ route('home').'/'.$setting->grab('main_route') . '/complete' }}">{{ trans('ticketit::lang.nav-completed-tickets') }}
                    <span class="badge">
                        {{ $u->getTickets(true)->count() }}
                    </span>
                </a>
            </li>

            @if($u->isAdmin())
                <li role="presentation" class="{!! Request::is(Request::segment(1).'/'.Request::segment(1).'/'.$setting->grab('admin_route')) || Request::is(route('home').'/'.$setting->grab('admin_route').'/indicator*') ? "active" : "" !!}">
                    <a href="{{ route('home').'/'.$setting->grab('admin_route') }}">{{ trans('ticketit::admin.nav-dashboard') }}</a>
                </li>

                <li role="presentation" class="dropdown {!!
                    Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/status*") ||
                    Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/priority*") ||
                    Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/agent*") ||
                    Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/category*")
                    ? "active" : "" !!}">

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Settings <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation" class="{!! Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/status*") ? "active" : "" !!}">
                            <a href="{{ route('home').'/'.$setting->grab('admin_route') }}/status">{{ trans('ticketit::admin.nav-statuses') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/priority*") ? "active" : "" !!}">
                            <a href="{{ route('home').'/'.$setting->grab('admin_route') }}/priority">{{ trans('ticketit::admin.nav-priorities') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/agent*") ? "active" : "" !!}">
                            <a href="{{ route('home').'/'.$setting->grab('admin_route') }}/agent">{{ trans('ticketit::admin.nav-agents') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/category*") ? "active" : "" !!}">
                            <a href="{{ route('home').'/'.$setting->grab('admin_route') }}/category">{{ trans('ticketit::admin.nav-categories') }}</a>
                        </li>
                        <li role="presentation"  class="{!! Request::is(Request::segment(1).'/'.$setting->grab('admin_route')."/config*") ? "active" : "" !!}">
                            <a href="{{ route('home').'/'.$setting->grab('admin_route') }}/configuration">{{ trans('ticketit::admin.nav-configuration') }}</a>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</div>
