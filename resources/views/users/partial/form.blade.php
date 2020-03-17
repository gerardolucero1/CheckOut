<div class="card m-b-30">
        <div class="card-header bg-white">
            <h5 class="card-title text-black">Add the user info</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{ Form::label('password', 'Password') }}
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('role', 'Role') }}
                        {{ Form::select('role', $roles, null, ['class' => 'form-control', 'id' => 'email']) }}
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        {!! Form::hidden('hotel_id', $hotel->id) !!}
                    </div>
                </div>
                <button type="submit" class="btn btn-rounded btn-primary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
            </form>                                                                                    
        </div>
    </div>