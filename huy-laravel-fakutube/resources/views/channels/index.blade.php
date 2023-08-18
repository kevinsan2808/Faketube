@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Channels</h1>
        <a href="{{ route('channels.create') }}" class="btn btn-primary">Create Channel</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Subscribers</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($channels as $channel)
            <tr>
                <td>{{ $channel->id }}</td>
                <td>{{ $channel->ChannelName }}</td>
                <td>{{ $channel->Description }}</td>
                <td>{{ $channel->SubscribersCount }}</td>
                <td>{{ $channel->URL }}</td>
                <td>
                    <a href="{{ route('channels.edit', $channel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('channels.destroy', $channel->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
