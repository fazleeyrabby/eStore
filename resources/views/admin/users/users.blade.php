@extends('layouts.admin.master')
@section('title', 'User All infos')
@section('content')
<div class="page-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="white-box" style="background: #F5F5F5;">
               <!-- <h3 class="box-title m-b-0 text-info">All User Information</h3><br>
               <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p> -->
               <div class="app-title">
                  <div>
                     <h3 class="text-info"><i class="fa fa-user fa-lg "></i> All User Information</h3>
                  </div>
               </div>
                <!-- <div class="panel-heading"> With Horizontal two column</div> -->
               
               
               <div class="col-md-offset-4">
                  <select class="" width="30%" name="columnName" id="columnName">
                        <option value="">SELECT</option>
                        <option value="name">Name</option>
                        <option value="email">Email</option>
                        <option value="role">Role</option>
                        <option value="contrat">Contract</option>
                  </select> 
                  <input type="text" name="filterValue" id="filterValue">
               </div>
                                                   
               
               <br>
               <div class="table-responsive">
                  <table class="table table-bordered" id="users_table">
                     <thead>
                        <tr style="background-color: #8D9498;">
                           <th>SL</th>
                           <th>User Name</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th>Contact</th>
                           <th>Date of Birth</th>
                           <th>Status</th>
                           <th>Created Date</th>
                           <th class="text-nowrap">Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody">
                        @php
                        $sl = 1;
                        @endphp
                        @foreach($users as $key=>$user)
                        <tr>
                           <td>{{ $key+ $users->firstItem() }}</td>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                           <td>
                              @if($user->role == 1)
                                 <span>Admin</span>
                              @elseif($user->role == 2)
                                 <span>Super Admin</span> 
                              @else
                                 <span>Sub Admin</span>
                              @endif
                           </td>
                           <td>{{ $user->contact }} </td>
                           <td>{{ Carbon\Carbon::parse($user->date_of_birth)->format('M j, Y') }}</td>
                           <td>
                              @if($user->sts == 1)
                                <span class="label text-success">Approve</span> 
                              @else
                                 <span class="label text-danger">Pending</span>
                              @endif
                           </td>
                           <td>{{ Carbon\Carbon::parse($user->created_at)->format('M j, Y') }}</td>
                           <td class="text-nowrap">
                              <a href="#" data-original-title="Edit" data-brandname="" data-toggle="modal" data-target="#edituser{{$user->id}}"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                              <a href="{{ route('user.delete',$user->id) }}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                           </td>
                        </tr>
                        <!-- Start Edit User modal -->
                        <div class="modal fade" id="edituser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                           <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Edit User</h4>
                                 </div>
                                 <div class="modal-body">
                                     {!! Form::open(['route' => 'user.update','class'=>'form-horizontal brandEditValidation','id'=>'userEditForm','name'=>'userEditForm']) !!}
                                        @csrf
                                        <input type="hidden" name="eUserId" value="{{$user->id}}">
                                       <div class="form-group">
                                          <label for="recipient-name" class="control-label"><b>Role:</b></label>
                                          <!--   @php
                                                $roles = App\Models\Roles::all();
                                            @endphp -->
                                          <select class="form-control" name="role">
                                                <option>Select</option>
                                                @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ ($role->id == $user->role) ? 'selected' : '' }}>{{ $role->name }}</option>
                                                @endforeach
                                          </select>
                                       </div> 
                                       <div class="form-group">
                                          <label for="recipient-name" class="control-label"><b>Contact:</b></label>
                                          <input type="number" name="contact" class="form-control" value="{{ $user->contact }}" id="recipient-name"> 
                                       </div>
                                       <div class="form-group">
                                          <label for="recipient-name" class="control-label"><b>Status:</b></label>
                                          <select class="form-control" name="status">
                                                <option>Select</option>
                                                <option value="1">Approve</option>
                                                <option value="0">Pending</option>
                                          </select>
                                       </div> 
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save changes</button>

                                 </div>
                                   {!! Form::close() !!}
                              </div>
                           </div>
                        </div>
                        <!-- end Edit User modal -->
                        @endforeach
                     </tbody>
                  </table>
                  <div class="text-right">
                  <p style="margin:1px 219px -48px 0px">Displaying {{$users->firstItem()}} to {{ $users->lastItem() }} of {{ $users->total() }} User(s).</p>
                  {!! $users->links() !!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- sweert alert message -->
@endsection

@section('js')
   <script type="text/javascript">
      $(document).ready(function(){
         $("#filterValue").on("keyup", function(){
          alert("The paragraph was clicked.");
      });
   });
@endsection