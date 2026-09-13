@extends('layouts.app')


@section('content')


<section class="admin-dashboard">



<div class="form-container">

<a href="{{ route('admin.pengurus.index') }}" class="btn-kembali">
    ← Kembali
</a>

<h1>
Tambah Pengurus
</h1>





<form method="POST"
action="{{ route('admin.pengurus.store') }}"
enctype="multipart/form-data">


@csrf




<div class="form-group">


<label>
Nama Pengurus
</label>


<input type="text"
name="nama"
placeholder="Masukkan nama pengurus"
value="{{ old('nama') }}">


</div>





<div class="form-group">


<label>
Jabatan
</label>


<input type="text"
name="jabatan"
placeholder="Contoh: Ketua PRM Brengkok"
value="{{ old('jabatan') }}">


</div>





<div class="form-group">


<label>
Deskripsi
</label>


<textarea name="deskripsi"
placeholder="Masukkan deskripsi">{{ old('deskripsi') }}</textarea>


</div>





<div class="form-group">


<label>
Foto Pengurus
</label>


<input type="file"
name="gambar"
accept="image/*">


</div>





<button type="submit"
class="btn-submit">

Simpan Data

</button>



</form>



</div>



</section>



@endsection