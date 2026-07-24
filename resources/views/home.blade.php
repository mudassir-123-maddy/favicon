@extends('Main')
@section('navbar')
    @include('Navbar')
@endsection
@section('pages')
<br><br><br><br><br><br><br><br><br><br>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="w_image" id="imageInput" accept="image/*">
    <input type="submit" value="Upload Image">
</form>

@if(session('result'))
    @php $result = session('result'); @endphp
    @if(isset($result['error']))
        <p style="color:red;">Upload failed: {{ $result['body'] }}</p>
    @else
        <p style="color:green;">Uploaded: {{ $result['file_name'] }}</p>
        @if($result['url'])
            <p><a href="{{ $result['url'] }}" target="_blank">{{ $result['url'] }}</a></p>
            <img src="{{ $result['url'] }}" width="200">
        @endif
    @endif
@endif
<br><br><br><br><br><br><br><br><br><br>
    @include('pages')
@endsection
@section('footer')
@include('footer')
@endsection