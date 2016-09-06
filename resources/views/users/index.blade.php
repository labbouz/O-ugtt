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

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"> @lang('main.page') @lang('main.users') </h3>


                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المستخدم</th>
                            <th>البريد الإلكتروني</th>
                            <th>اضيف في</th>
                            <th>الصلاحيات</th>
                            <th colspan="2">التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{  $user->id }}</td>
                                <td>{{  $user->name }}</td>
                                <td>{{  $user->email }}</td>
                                <td>{{  $user->created_at }}</td>
                                <td>{{  $user->is_admin == 1 ? 'مدير' : 'عضو' }}</td>
                                <td>
                                    <a href="{{ url('/users/'.$user->id.'/edit')  }}">تعديل</a>

                                </td>
                                <td>
                                    <a href="{{ url('/users/'.$user->id.'/delete')  }}">حذف</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>اسم المستخدم</th>
                            <th>البريد الإلكتروني</th>
                            <th>اضيف في</th>
                            <th>الصلاحيات</th>
                            <th colspan="2">التحكم</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')

@endsection
