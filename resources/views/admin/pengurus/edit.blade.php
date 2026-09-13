@extends('layouts.app')


@section('content')


<section class="admin-dashboard">


<div class="form-container">
<a href="{{ route('admin.pengurus.index') }}" class="btn-kembali">
    ← Kembali
</a>

<h1>
Edit Pengurus
</h1>



<form method="POST"
action="{{ route('admin.pengurus.update', ['pengurus'=>$pengurus->id]) }}"
enctype="multipart/form-data">


@csrf

@method('PUT')





<div class="form-group">


<label>
Nama Pengurus
</label>


<input type="text"
name="nama"
value="{{ $pengurus->nama }}">


</div>





<div class="form-group">


<label>
Jabatan
</label>


<input type="text"
name="jabatan"
value="{{ $pengurus->jabatan }}">


</div>





<div class="form-group">


<label>
Deskripsi
</label>


<textarea name="deskripsi">{{ $pengurus->deskripsi }}</textarea>


</div>






<div class="form-group">


<label>
Foto Saat Ini
</label>



@if($pengurus->gambar)


<div class="preview-edit">


<img src="{{ asset('storage/'.$pengurus->gambar) }}">


</div>


@endif



</div>







<div class="form-group">


<label>
Ganti Foto
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