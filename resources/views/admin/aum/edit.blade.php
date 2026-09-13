@extends('layouts.app')


@section('content')


<section class="admin-dashboard">



<div class="form-container">


<a href="{{ route('admin.aum.index') }}" class="btn-kembali">
    ← Kembali
</a>
<h1>
Edit AUM
</h1>




<form method="POST"
action="{{ route('admin.aum.update',$aum->id) }}"
enctype="multipart/form-data">


@csrf

@method('PUT')




<div class="form-group">


<label>
Nama AUM
</label>


<input type="text"
name="nama"
value="{{ $aum->nama }}">


</div>





<div class="form-group">


<label>
Deskripsi
</label>


<textarea name="deskripsi">{{ $aum->deskripsi }}</textarea>


</div>






<div class="form-group">


<label>
Gambar Saat Ini
</label>


@if($aum->gambar)

<div class="preview-edit">

<img src="{{ asset('storage/'.$aum->gambar) }}">

</div>

@endif


</div>






<div class="form-group">


<label>
Ganti Gambar (Opsional)
</label>


<input type="file"
name="gambar"
accept="image/*">


</div>






<button class="btn-submit">

Update Data

</button>



</form>




</div>



</section>



@endsection