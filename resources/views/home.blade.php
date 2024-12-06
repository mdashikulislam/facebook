@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-white">
                <div class="card-header">{{ __('Ip Info') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="datatable" class="table table-striped">
                        <thead>
                            <th>Id</th>
                            <th>Ip</th>
                            <th>Created</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script>
        $(document).ready(function (){
            $('#datatable').dataTable({
                processing: true,
                serverSide: true,
                ordering:true,
                order: [[2, 'desc']],
                ajax: {
                    url: "{{ route('home') }}",
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                        defaultContent: "",
                    },
                    {
                        data: 'ip',
                        name: 'ip',
                        defaultContent: "",
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        defaultContent: "",
                    }
                ],
                columnDefs:[
                    {
                        target:2,
                        render: function (data, type, row) {
                            return moment(data).format('D-MM-Y H:mm:ss');
                        }
                    }
                ]
            });
        });
    </script>
@endpush
