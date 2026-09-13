@extends('layouts.app')


@section('content')


<section class="admin-dashboard">


<div class="form-container">

<a href="{{route('admin.ortom.index')}}"  class="btn-kembali">
    ← Kembali
</a>
<h1>
Tambah Organisasi Otonom
</h1>



<form method="POST"
action="{{ route('admin.ortom.store') }}"
enctype="multipart/form-data">


@csrf



<div class="form-group">

<label>
Nama ORTOM
</label>


<input type="text"
name="nama"
placeholder="Masukkan nama ORTOM"
value="{{ old('nama') }}">


</div>





<div class="form-group">


<label>
Deskripsi
</label>


<textarea 
name="deskripsi"
placeholder="Masukkan deskripsi ORTOM">{{ old('deskripsi') }}</textarea>


</div>





<div class="form-group">


<label>
Gambar ORTOM
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