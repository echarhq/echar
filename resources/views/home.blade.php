@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Your Requests</h4>
                </div>
                <div class="panel-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <b>Time Offs</b>
                            <a href="#" class="pull-right">View All</a>
                        </div>
                        <leaves></leaves>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <b>Claims</b>
                            <a href="#" class="pull-right">View All</a>
                        </div>
                        <memos></memos>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Memos</h4>
                </div>
                <memos></memos>
            </div>
        </div>
        
    </div>
</div>
@endsection
