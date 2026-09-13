@extends('layouts.app')


@section('content')


<section class="admin-dashboard">


<div class="form-container">

<a href="{{route('admin.ortom.index')}}"  class="btn-kembali">
    ← Kembali
</a>
<h1>
Edit Organisasi Otonom
</h1>




<form method="POST"
action="{{ route('admin.ortom.update',$ortom->id) }}"
enctype="multipart/form-data">


@csrf

@method('PUT')





<div class="form-group">


<label>
Nama ORTOM
</label>


<input type="text"
name="nama"
value="{{ $ortom->nama }}">


</div>






<div class="form-group">


<label>
Deskripsi
</label>


<textarea name="deskripsi">{{ $ortom->deskripsi }}</textarea>


</div>






<div class="form-group">


<label>
Gambar Saat Ini
</label>



@if($ortom->gambar)


<div class="preview-edit">


<img src="{{ asset('storage/'.$ortom->gambar) }}">


</div>


@endif



</div>






<div class="form-group">


<label>
Ganti Gambar
</label>


<input type="file"
name="gambar"
accept="image/*">


</div>






<button type="submit"
class="btn-submit">

Update Data

</button>



</form>


</div>


</section>


@endsection