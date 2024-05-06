@extends('index')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ url('/store-order') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="user_id">User:</label>
                    <select class="form-control" id="user_id" name="user_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="total_amount">Total Amount:</label>
                    <input type="text" class="form-control" id="total_amount" name="total_amount" placeholder="Enter total amount">
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-control" id="status" name="status">
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
