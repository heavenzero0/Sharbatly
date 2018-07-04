@extends('user.dashboard')
@section('content')
	

@endsection

@section('tabs')
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href=' {{ route("docu_dashboard") }} '>
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href=' {{ route("create_loading") }} '>
                        <i class="material-icons">home</i>
                        <span>Create Loading Details</span>
                    </a>
                </li>
                <li>
                    <a href="pages/typography.html">
                        <i class="material-icons">text_fields</i>
                        <span>View All Request</span>
                    </a>
                </li>
        </ul>
    </div>
@endsection
