@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Пользователи</h1>

                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Пользователь</th>
                        <th>Кол-во ответов</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Всего/Среднее</th>

                            <td style="font-size: 200%">
                                {{ $total_users }}
                            </td>
                            <td style="font-size: 200%">
                            {{ $total_replies }} (всего) / {{ $total_replies / $total_users }} (в среднем)
                            </td>
                        </tr>
                        @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>

                                    <td>
                                        <img src="{{ $user->avatar }}" style="height:20px" /> <a href="/admin/users/{{ $user->id }}">{{ $user->name }}</a>
                                    </td>
                                    <td>
                                        {{ count($user->replies) }}
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@stop