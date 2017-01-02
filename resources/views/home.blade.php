@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>My Info</h4>
                </div>
                <ul class="list-group" id="memo">
                    <li class="list-group-item">
                        <div class="my-image">a</div>
                        <div class="my-name">Mohammad Hakim Assiddiq bin Razalan</div>
                    </li>
                    <li class="list-group-item">
                        <div><span class="label label-primary">Company</span></div>
                        <div>Echar Sdn Bhd</div>
                    </li>
                    <li class="list-group-item">
                        <div><span class="label label-primary">Boarding Date</span></div>
                        <div>15 September 2015</div>
                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Memos</h4>
                </div>
                <memos></memos>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>My Requests</h4>
                </div>
                <div class="panel-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <b>Time Offs</b>
                            <a href="#" class="pull-right">View All</a>
                        </div>
                        <leaves></leaves>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-sm btn-info pull-right"><i class="fa fa-fw fa-plus"></i> Add Time Off Request</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <b>Claims</b>
                            <a href="#" class="pull-right">View All</a>
                        </div>
                        <claims></claims>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-sm btn-info pull-right"><i class="fa fa-fw fa-plus"></i> Add Claim</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12 footer-powered">
            Powered by ECHAR. Made with <i class="fa fa-fw fa-heart text-danger"></i>
        </div>
    </div>
</div>
@endsection
