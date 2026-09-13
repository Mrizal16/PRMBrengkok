@extends('layouts.app')


@section('content')


<section class="admin-dashboard">


<div class="admin-header">





<h1>
Data Amal Usaha Muhammadiyah
</h1>

<a href="{{ route('admin.dashboard') }}" class="btn-kembali">
    ← Kembali
</a>
<a href="{{ route('admin.aum.create') }}" class="btn-card">
    + Tambah AUM
</a>


</div>




<div class="aum-admin-container">



@foreach($aums as $aum)


<div class="aum-admin-card">



<div class="aum-preview">


@if($aum->gambar)

<img src="{{ asset('storage/'.$aum->gambar) }}" 
alt="{{ $aum->nama }}">

@else

<img src="{{ asset('assets/images/default.jpg') }}">

@endif


</div>




<div class="aum-content">


<h3>
{{ $aum->nama }}
</h3>


<p>
{{ Str::limit($aum->deskripsi,100) }}
</p>




<div class="aum-action">


<a href="{{ route('admin.aum.edit',$aum->id) }}" 
class="btn-edit">

Edit

</a>




<form method="POST"
action="{{ route('admin.aum.destroy',$aum->id) }}">

@csrf
@method('DELETE')


<button class="btn-delete"
onclick="return confirm('Hapus data ini?')">

Hapus

</button>


</form>


</div>


</div>



</div>


@endforeach



</div>



</section>


@endsection