@extends('layouts.admin.master')
@section('title', 'User All infos')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
        	   <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <!-- <h3 class="box-title m-b-0 text-info">All User Information</h3><br> -->
                            <!-- <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p> -->
                            <div class="app-title">
						      <div>
						         <h1 class="text-info"><i class="fa fa-user fa-lg "></i> All User Information</h1>
						      </div>
						   </div><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="users_table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@php
                                    		$sl = 1;
                                    	@endphp
                                    	@foreach($users as $user)
                                        <tr>
                                            <td>{{ $sl }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td><span class="label label-danger">admin</span> </td>
                                            <td><span class="label text-danger">Pending</span> </td>
                                            <td>{{ $user->email }}</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                        @php
                                            $sl++;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

<!-- @section('js')
	<script type="text/javascript">
		$(document).ready(function() {
        	$('#users_table').DataTable();
    	});
	</script>
@endsection -->