<div class="card m-b-30">
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('brand', 'Brand') }}
                {{ Form::text('brand', null, ['class' => 'form-control', 'id' => 'brand']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('provider', 'Provider') }}
                {{ Form::text('provider', null, ['class' => 'form-control', 'id' => 'provider']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('cost', 'Cost') }}
                {{ Form::text('cost', null, ['class' => 'form-control', 'id' => 'cost']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('quantityRoom', 'Quantity per room') }}
                {{ Form::text('quantityRoom', null, ['class' => 'form-control', 'id' => 'quantityRoom']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('quantityInventory', 'Quantity per inventory') }}
                {{ Form::text('quantityInventory', null, ['class' => 'form-control', 'id' => 'quantityInventory']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('quantityAlert', 'Quantity alert') }}
                {{ Form::text('quantityAlert', null, ['class' => 'form-control', 'id' => 'quantityAlert']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('category_id', 'Category') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'id' => 'category_id']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::hidden('hotel_id', Auth::user()->hotel->id) }}
            </div>
        </div>
        <button type="submit" class="btn btn-rounded btn-primary"><i class="mdi mdi-content-save mr-2"></i> Save</button>
    </div>
</div>