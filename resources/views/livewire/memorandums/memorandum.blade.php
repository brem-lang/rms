<div>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Memorandum') }}
        </h2>
    </x-slot>

    <x-slot name="actionBtn">
        <a 
        href="{{ route('create.createMemorandum') }}" 
        class="btn btn-primary w-100">
            Add Memorandum
        </a>
    </x-slot>

    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>Document Series No</th>
                                <th>Name of Employee</th>
                                <th>Section</th>
                                <th>Asset Code</th>
                                <th>Created by</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $memorandum)
                                <tr>                    
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$memorandum->document_series_no}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$memorandum->name_of_employee}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$memorandum->section}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$memorandum->asset_code}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$memorandum->created_by}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a           
                                            href="{{ route('pdf.memorandum.view', $memorandum->id) }}"                           
                                            class="btn">
                                                Details
                                            </a>
                                            <a 
                                            href="{{ route('pdf.memorandum.generate', $memorandum->id) }}" 
                                            class="btn">
                                                Download PDF
                                            </a>
                                        </div>
                                    </td>
                                </tr>                      
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

