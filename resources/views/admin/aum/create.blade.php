@extends('layouts.app')


@section('content')


<section class="admin-dashboard">


<div class="form-container">

<a href="{{ route('admin.aum.index') }}" class="btn-kembali">
    ← Kembali
</a>
<h1>
Tambah Amal Usaha Muhammadiyah
</h1>



<form method="POST"
action="{{ route('admin.aum.store') }}"
enctype="multipart/form-data">


@csrf



<div class="form-group">

<label>
Nama AUM
</label>

<input type="text"
name="nama"
placeholder="Masukkan nama AUM"
value="{{ old('nama') }}">


</div>





<div class="form-group">


<label>
Deskripsi
</label>


<textarea 
name="deskripsi"
placeholder="Masukkan deskripsi AUM">{{ old('deskripsi') }}</textarea>


</div>





<div class="form-group">


<label>
Gambar AUM
</label>


<input type="file"
name="gambar"
accept="image/*">


</div>





<button class="btn-submit">

Simpan Data

</button>



</form>



</div>



</section>


@endsection