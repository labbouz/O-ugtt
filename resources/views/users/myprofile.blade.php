@extends('layouts.app')


@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Starter Page</h4>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Blank Starter page</h3>
            </div>
            <pre>
            <?php
            print_r($user);
            ?>
            </pre>

        </div>
    </div>
    <!-- .row -->
    @endsection




