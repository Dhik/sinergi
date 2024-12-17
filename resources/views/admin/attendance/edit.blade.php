@extends('adminlte::page')

@section('title', trans('labels.user'))

@section('content_header')
    <h1>{{ trans('labels.edit') }} {{ trans('labels.employee') }}</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @include('admin.employee._form', ['edit' => true])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#roles').select2({
                theme: 'bootstrap4',
                placeholder: '{{ trans('placeholder.multiple') }}',
                allowClear: true
            });

            $('#tenants').select2({
                theme: 'bootstrap4',
                placeholder: '{{ trans('placeholder.multiple') }}',
                allowClear: true
            });
        });
    </script>
@endsection
