<div>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Memorandum') }}
        </h2>
    </x-slot>
  
    <x-slot name="actionBtn">
        <a href="{{ route('create.memorandum') }}" class="btn btn-primary w-100">
            Back
        </a>
    </x-slot>
  
    <form method="POST" 
    action='{{route('create.memorandum.store')}}'
    >
    @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="ID number" name="id_no">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Name of Employee" name="name_of_employee">
          </div>
        </div>
        <br/>
        <input type="hidden" class="form-control" placeholder="Department" value="{{$document_series_number}}" name="document_series_no">
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Department" name="department">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Section" name="section">
            </div>
          </div>
          <br/>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Asset Code" name="asset_code">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Asset Type" name="asset_type">
            </div>
          </div>
          <br/>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Asset Description" name="asset_description">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Asset Serial Number" name="asset_serial_no">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Asset Value" name="asset_value">
              </div>
          </div>
          <br/>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Noted by" name="noted_by">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Prepared by" name="prepared_by">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Approved by" name="approved_by">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Checked by" name="checked_by">
              </div>
              <div class="col">
                  <input type="text" class="form-control" placeholder="Released by" name="released_by">
                </div>
          </div>
          <br/>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
  