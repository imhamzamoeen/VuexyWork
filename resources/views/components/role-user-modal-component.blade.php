  <!-- Add Role Modal -->
  <div class="modal fade" id="addRoleUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
                <div class="text-center mb-4">
                    <h1 class="role-title">Add New Role To Users</h1>
                    <p>Make Your User PowerFul</p>
                </div>
                <!-- Add role form -->
                <form method="POST" action="{{route('create.role_to_user')}}" id="roleuserForm">
                    @csrf
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Assign Roles to User</h3>
                            <div class="block-options">
                                <button type="submit"  class="btn btn-sm btn-primary">Add</button>
                                <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-primary">Cancel</button>
    
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-sm-3 py-md-5">
    
                                <div class="form-group col-md-6">
                                    <label for="Certificate">Users</label>
                                    <select class="select2 form-select user_select" id="select2-nested" name="user" >
                               
    
    
                                        @foreach ($users as $user_each)
                                            <option value="{{ $user_each->id }}">{{ $user_each->name }}:{{$user_each->email}}</option>
                                        @endforeach
                                    </select>
    
    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Certificate">Role</label>
                                    <select class="select2 form-select role_select" id="select2-basic" name="role" >
                                        @foreach ($role as $role_each)
                                            <option value="{{ $role_each->name }}">{{ $role_each->name }}</option>
                                        @endforeach
                                    </select>
    
    
    
                                </div>
                            </div>
                </form>
                <!--/ Add role form -->
            </div>
        </div>
    </div>
</div>
<!--/ Add Role Modal -->