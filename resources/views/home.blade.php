@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Memos</div>
                <memos></memos>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Your Request</div>
                <div class="panel-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">Leave</div>
                            <memos></memos>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">Claims</div>
                        <memos></memos>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
