<div class="card m-b-30">
    <div class="card-body">

        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('rooms', 'Number of rooms') }}
                {{ Form::text('rooms', null, ['class' => 'form-control', 'id' => 'rooms']) }}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('subInventory_id', 'Inventory') }}
                {{ Form::select('subInventory_id', $inventories, null, ['class' => 'form-control', 'id' => 'subInventory_id']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::hidden('hotel_id', Auth::user()->hotel->id) }}
            </div>
        </div>
    </div>
</div>