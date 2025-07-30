
@extends('layouts.app')

@section('title', 'Welcome Page')
@section('content')
    <p>Email : {{ $email }}</p>
    <table class="table m-3">
        <thead>
            <tr>
                <th>NO</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($users as $user) --}}
            @for ($i = 0; $i < 10; $i++)
            <tr>
                <td>{{ $i + 1 }}</td>
            </tr>
        @endfor
            {{-- @endforeach --}}
        </tbody>
       
    </table>
@endsection