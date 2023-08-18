@extends('layouts.app')

@section('content')
    <h1>{{ isset($channel) ? 'Edit Channel' : 'Create Channel' }}</h1>
    <form action="{{ isset($channel) ? route('channels.update', $channel->id) : route('channels.store') }}" method="POST">
        @csrf
        @if(isset($channel))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="ChannelName">Name</label>
            <input type="text" id="ChannelName" name="ChannelName" class="form-control" value="{{ $channel->ChannelName ?? '' }}">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea id="Description" name="Description" class="form-control">{{ $channel->Description ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="SubscribersCount">Subscribers Count</label>
            <input type="number" id="SubscribersCount" name="SubscribersCount" class="form-control" value="{{ $channel->SubscribersCount ?? '' }}">
        </div>
        <div class="form-group">
            <label for="URL">URL</label>
            <input type="url" id="URL" name="URL" class="form-control" value="{{ $channel->URL ?? '' }}">
        </div>

        <button type="submit" class="btn btn-success">{{ isset($channel) ? 'Update' : 'Create' }}</button>
    </form>
@endsection
