@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('delegations.delegations')  </h4>
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
                        <h3 class="box-title m-b-0">@lang('delegations.delegations')</h3>
                        <p class="text-muted m-b-0">@lang('delegations.description_delegations')</p>
                    </div>



                    <div class="col-sm-12 col-md-4 button-box m-b-0">
                        <a href="{{ route('delegation.create') }}" class="btn btn-block btn-info btn-lg  "><i class="fa fa-plus-circle m-l-5"></i>@lang('delegations.add_delegation') </a>
                    </div>
                </div>

                <hr class="m-t-20 m-b-30">

                 <div class="table-responsive">
                    <table id="lists_datas" class="table table-striped">
                        <thead>
                        <tr>
                            <th>@lang('delegations.la_delegation')</th>
                            <th class="select-filter">@lang('gouvernorats.gouvernorat')</th>
                            <th>@lang('main.add_in')</th>
                            <th class="no-sort">@lang('main.tools')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($delegations as $delegation)
                            <tr>
                                <td> @lang('delegations.delegation') {{ $delegation->nom_delegation }} </td>
                                <td>{{ $delegation->nom_gouvernorat }}</td>
                                <td><?php $date_created_at = new Date($delegation->created_at); ?>{{ $date_created_at->format('l j F Y - H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-success btn-circle" href="{{ route('delegation.edit', ['id' => $delegation->id])  }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle" href="{{ url('/delegation/'.$delegation->id.'/delete')  }}"><i class="fa fa-times"></i></a>
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

                initComplete: function () {
                    this.api().columns('.select-filter').every( function () {
                        var column = this;
                        var select = $('<select><option value="">@lang('gouvernorats.gouvernorat')</option></select>')
                                .appendTo( '.dataTables_filter' ) //$(column.footer()).empty()
                                .on( 'change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                    );

                                    column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                },
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
