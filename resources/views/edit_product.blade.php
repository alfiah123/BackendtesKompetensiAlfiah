@extends('index')

@section('data')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ url('/update-order', $order->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" value="{{ $dataToEdit->name }}">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description">{{ $dataToEdit->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price" value="{{ $dataToEdit->price }}">
                </div>

                <div class="form-group">
                    <label for="jenismakanan">Jenis Makanan:</label>
                    <select class="form-control" id="jenismakanan" name="jenismakanan">
                        <option value="Makanan" @if($dataToEdit->jenismakanan == 'Makanan') selected @endif>Makanan</option>
                        <option value="Minuman" @if($dataToEdit->jenismakanan == 'Minuman') selected @endif>Minuman</option>
                    </select>
                </div>

                {{-- <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div> --}}

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
