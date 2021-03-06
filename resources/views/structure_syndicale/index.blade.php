@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('syndicale.structures_syndicales')  </h4>
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
                        <h3 class="box-title m-b-0">@lang('syndicale.structures_syndicales')</h3>
                        <p class="text-muted m-b-0">@lang('syndicale.description_structures_syndicales')</p>
                    </div>



                    <div class="col-sm-12 col-md-4 button-box m-b-0">
                        <a href="{{ route('structure_syndicale.create') }}" class="btn btn-block btn-info btn-lg  "><i class="fa fa-plus-circle m-l-5"></i>@lang('syndicale.add_structure_syndicale') </a>
                    </div>
                </div>

                <hr class="m-t-20 m-b-30">


                <div class="table-responsive">
                    <table id="lists_datas" class="table table-striped">
                        <thead>
                        <tr>
                            <th class="no-sort">ID</th>
                            <th>@lang('syndicale.type_structure_syndicale_nom')</th>
                            <th>@lang('main.add_in')</th>
                            <th class="no-sort">@lang('main.tools')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($structures_syndicales as $structure_syndicale)
                            <tr>
                                <td>{{  $structure_syndicale->id }}</td>
                                <td>{{  $structure_syndicale->type_structure_syndicale }}</td>
                                <td><?php $date_created_at = new Date($structure_syndicale->created_at); ?>{{ $date_created_at->format('l j F Y - H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-success btn-circle" href="{{ route('structure_syndicale.edit', ['id' => $structure_syndicale->id])  }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle" href="{{ url('/structure_syndicale/'.$structure_syndicale->id.'/delete')  }}"><i class="fa fa-times"></i></a>
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
