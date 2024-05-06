@extends('index')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ url('/update-user', $dataToEdit->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter user name" value="{{ $dataToEdit->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter user email" value="{{ $dataToEdit->email }}">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" disabled>
                    <small class="text-muted">Leave this field empty if you don't want to change the password.</small>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter user address">{{ $dataToEdit->address }}</textarea>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter user phone number" value="{{ $dataToEdit->phone }}">
                </div>

                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control" id="role" name="role">
                        <option value="user" {{ $dataToEdit->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $dataToEdit->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
