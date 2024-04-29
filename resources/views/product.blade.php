@extends('index')

@section('data')
<div class="table-responsive">
    <a href="{{ url('/add-product') }}" class="btn btn-primary">add +</a>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataProduct as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('/edit-product/'.$item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/delete-product/'.$item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" href="{{ url('/delete-product/'.$item->id) }}" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection