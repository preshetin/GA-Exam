@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Пользователи</h1>

                <table class="table table-bordered" id="users-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                    </thead>
                </table>

                @push('scripts')
                <script>
                    $(function() {
                        $('#users-table').DataTable({
                            processing: true,
                            serverSide: true,
                            ajax: '{!! route('datatables.data') !!}',
                            columns: [
                                { data: 'id', name: 'id' },
                                { data: 'name', name: 'name' },
                                { data: 'email', name: 'email' },
                                { data: 'created_at', name: 'created_at' },
                                { data: 'updated_at', name: 'updated_at' }
                            ]
                        });
                    });
                </script>
                @endpush

            </div>
        </div>
    </div>
@stop