@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('secteur.secteurs')  </h4>
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
    {{-- --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <h3 class="box-title m-b-0">@lang('secteur.secteurs')</h3>
                        <p class="text-muted m-b-0">@lang('secteur.description_secteurs')</p>
                    </div>



                    <div class="col-sm-12 col-md-4 button-box m-b-0">
                        <a href="{{ route('secteur.create') }}" class="btn btn-block btn-info btn-lg  "><i class="fa fa-plus-circle m-l-5"></i>@lang('secteur.add_secteur') </a>
                    </div>
                </div>

                <hr class="m-t-20 m-b-30">


                <div class="table-responsive">
                    <table id="lists_datas" class="table table-striped">
                        <thead>
                        <tr>
                            <th>@lang('secteur.secteur_nom')</th>
                            <th>@lang('main.add_in')</th>
                            <th class="no-sort">@lang('main.tools')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($secteurs as $secteur)
                            <tr>
                                <td>{{  $secteur->nom_secteur }}</td>
                                <td><?php $date_created_at = new Date($secteur->created_at); ?>{{ $date_created_at->format('l j F Y - H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-success btn-circle" href="{{ url('/secteur/'.$secteur->id.'/edit')  }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle" href="{{ url('/secteur/'.$secteur->id.'/delete')  }}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
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
                "paging": false,
                "info": false,
                "language": {
                    "url": "{{ Request::root() }}/js/lang/Arabic.json"
                },
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [ -1 ] }
                ]
            } );

        });
    </script>
@endsection
