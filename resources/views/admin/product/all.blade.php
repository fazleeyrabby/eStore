@extends('layouts.admin.master')
@section('title', 'All infos')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
        	 <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Striped Table</h3>
                        <p class="text-muted m-b-20">Add<code>.table-striped</code>for borders on all sides of the table and cells.</p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th>Progress</th>
                                        <th>Deadline</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lunar probe project</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                            </div>
                                        </td>
                                        <td>May 15, 2015</td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dream successful plan</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                            </div>
                                        </td>
                                        <td>July 1, 2015</td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Office automatization</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                            </div>
                                        </td>
                                        <td>Apr 12, 2015</td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>The sun climbing plan</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                            </div>
                                        </td>
                                        <td>Aug 9, 2015</td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Open strategy</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                                            </div>
                                        </td>
                                        <td>Apr 2, 2015</td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tantas earum numeris</td>
                                        <td>
                                            <div class="progress progress-xs margin-vertical-10 ">
                                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                            </div>
                                        </td>
                                        <td>July 11, 2015</td>
                                        <td class="text-nowrap">
                                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection