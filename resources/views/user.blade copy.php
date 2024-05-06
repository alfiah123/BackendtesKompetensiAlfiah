@extends('index')

@section('data')

tabel USER
<div class="table-responsive">
    <a href="{{ url('/add-user') }}" class="btn btn-primary">add +</a>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>email </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUser as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email  }}</td>
                    <td>
                        <a href="{{ url('/edit-user/'.$item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/delete-user/'.$item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" href="{{ url('/delete-user/'.$item->id) }}" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection