@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('societe.Institutions_infractions_commises')  </h4>
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
                        <h3 class="box-title m-b-0">@lang('societe.Institutions_infractions_commises')</h3>
                        <p class="text-muted m-b-0">@lang('societe.description_Institutions_infractions_commises')</p>
                    </div>



                    <div class="col-sm-12 col-md-4 button-box m-b-0">
                        <a href="{{ route('societe.create') }}" class="btn btn-block btn-info btn-lg  "><i class="fa fa-plus-circle m-l-5"></i>@lang('societe.add_societe') </a>
                    </div>
                </div>

                <hr class="m-t-20 m-b-30">

                 <div class="table-responsive">
                    <table id="lists_datas" class="table table-striped">
                        <thead>
                        <tr>
                            <th>@lang('societe.nom_societe')</th>
                            <th class="select-filter">@lang('societe.type_societe')</th>
                            <th>@lang('main.add_in')</th>
                            <th class="no-sort">@lang('main.tools')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($societes as $societe)
                            <tr>
                                <td>{{ $societe->nom_societe }} <a href="{{ route('dossier.create', ['id' => $societe->id]) }}" class="label label-rouded label-purple"><i class="fa fa-plus-circle m-l-5 "></i> @lang('dossier.add_dossier_v')</a></td>
                                <td>{{ $societe->nom_type_societe }}</td>
                                <td><?php $date_created_at = new Date($societe->created_at); ?>{{ $date_created_at->format('l j F Y - H:i:s') }}</td>
                                <td>
                                    <a class="btn btn-success btn-circle" href="{{ route('societe.edit', ['id' => $societe->id])  }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-circle" href="{{ url('/societe/'.$societe->id.'/delete')  }}"><i class="fa fa-times"></i></a>
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
                        var select = $('<select><option value="">@lang('societe.type_societe')</option></select>')
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
