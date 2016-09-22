@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.users')  </h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection


{{-- Block header--}}

@section('header')

    <!-- Custom CSS -->
    {!! Html::style('plugins/bower_components/datatables/jquery.dataTables.min.css') !!}
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

@endsection


{{-- Block content --}}

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">@lang('users.users')</h3>
                <p class="text-muted m-b-30">@lang('users.info_list_users')</p>


               <?php
                    $roles_observateur = Auth::user()->getRoles();
                    array_pull($roles_observateur, Auth::user()->role_id);
               ?>
               <div class="table-responsive">
                    <table id="lists_datas" class="table table-striped">
                        <thead>
                        <tr>
                            <th>@lang('users.name_user')</th>
                            <th>@lang('users.email')</th>
                            <th>@lang('main.add_in')</th>
                            <th class="no-sort">@lang('users.droits')</th>
                            @role('administrator')
                            <th class="no-sort">@lang('main.tools')</th>
                            @endrole
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <?php $user_check = \App\User::find($user->id); ?>
                            @role('administrator')
                            <tr>
                                <td>{{  $user->name }}</td>
                                <td>{{  $user->email }}</td>
                                <td><?php $date_created_at = new Date($user->created_at); ?>{{ $date_created_at->format('l j F Y - H:i:s') }}</td>
                                <td><span class="label label-{{  $user->class_color }}">{{  $user->role_name }}</span></td>
                                <td>
                                    <a class="btn btn-success btn-circle" href="{{ url('/users/'.$user->id.'/edit')  }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle" href="{{ url('/users/'.$user->id.'/delete')  }}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            @else

                                @if($user_check->is($roles_observateur, 'or'))
                                    <tr>
                                        <td>{{  $user->name }}</td>
                                        <td>{{  $user->email }}</td>
                                        <td><?php $date_created_at = new Date($user->created_at); ?>{{ $date_created_at->format('l j F Y - H:i:s') }}</td>
                                        <td><span class="label label-{{  $user->class_color }}">{{  $user->role_name }}</span></td>
                                    </tr>
                                @endif

                            @endrole

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')
    {!! Html::script('plugins/bower_components/datatables/jquery.dataTables.min.js') !!}

    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    <script>
        $(document).ready(function(){
            $('#lists_datas').DataTable( {
                "language": {
                    "url": "{{ Request::root() }}/js/lang/Arabic.json"
                },
                "aoColumnDefs": [
                    @role('administrator')
                    { 'bSortable': false, 'aTargets': [ -1, -2 ] }
                    @else
                    { 'bSortable': false, 'aTargets': [ -1 ] }
                    @endrole

                ]
            } );

        });
    </script>
@endsection
