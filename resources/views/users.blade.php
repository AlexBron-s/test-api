@extends('layouts.admin')

@section('content')

    <div>
        <h3>Создать нового пользователя</h3>
        <form action="{{route('user-form')}}" method="post">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="" placeholder="Введите имя" id="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" value="" placeholder="Введите email" id="email">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="text" name="password" value="" placeholder="Введите пароль" id="password">
            </div>
            <button type="submit">Создать</button>
        </form>
        @include('inc.messages')
    </div>

    <div>
        <h3>Пользователи:</h3>
        <table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
