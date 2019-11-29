<div class="card m-b-30">
    <div class="card-header bg-white">
        <h5 class="card-title text-black">Add the hotel info</h5>
    </div>
    <div class="card-body">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('adress', 'Adress') }}
                {{ Form::text('adress', null, ['class' => 'form-control', 'id' => 'adress']) }}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('CP', 'CP') }}
                {{ Form::text('CP', null, ['class' => 'form-control', 'id' => 'CP']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('RFC', 'RFC') }}
                {{ Form::text('RFC', null, ['class' => 'form-control', 'id' => 'RFC']) }}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('fiscalName', 'Fiscal Name') }}
                {{ Form::text('fiscalName', null, ['class' => 'form-control', 'id' => 'fiscalName']) }}
            </div>
            <div class="form-group col-md-4">
                {{ Form::label('telephone', 'Telephone') }}
                {{ Form::text('telephone', null, ['class' => 'form-control', 'id' => 'telephone']) }}
            </div>
            <div class="form-group col-md-2">
                {{ Form::label('corporation', 'Corporation') }}
                {{ Form::text('corporation', null, ['class' => 'form-control', 'id' => 'corporation']) }}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-2">
                {{ Form::label('email', 'Email') }}
                {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
            </div>
            <div class="form-group col-md-2">
                {!! Form::hidden('status', 1) !!}
            </div>
          </div>
          <button type="submit" class="btn btn-rounded btn-primary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
        </form>                                                                                    
    </div>
</div>