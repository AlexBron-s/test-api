@extends('layouts.app')

@section('title', 'Уведомления')

@section('content')
    <div>
        <h3>Уведомления:</h3>
        <table>
            <tr>
                <td>Сообщение</td>
                <td>Время</td>
            </tr>
            @foreach($notifications as $notification)
                <tr>
                    <td><a href={{route('post', $notification->data['post_id'])}}>{{$notification->data['message']}}</a></td>
                    <td>{{$notification->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
