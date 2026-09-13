@extends('layouts.app')


@section('content')


<section class="admin-dashboard">



<div class="admin-header">


<h1>
Data Organisasi Otonom (ORTOM)
</h1>

<a href="{{ route('admin.dashboard') }}" class="btn-kembali">
    ← Kembali
</a>

<a href="{{ route('admin.ortom.create') }}"
class="btn-card">

+ Tambah ORTOM

</a>


</div>





<div class="aum-admin-container">



@foreach($ortoms as $ortom)



<div class="aum-admin-card">





<div class="aum-preview">


@if($ortom->gambar)


<img src="{{ asset('storage/'.$ortom->gambar) }}"
alt="{{ $ortom->nama }}">



@else


<img src="{{ asset('assets/images/default.jpg') }}">



@endif



</div>






<div class="aum-content">



<h3>
{{ $ortom->nama }}
</h3>



<p>
{{ Str::limit($ortom->deskripsi,120,'...') }}
</p>





<div class="aum-action">



<a href="{{ route('admin.ortom.edit',$ortom->id) }}"
class="btn-edit">

Edit

</a>





<form method="POST"
action="{{ route('admin.ortom.destroy',$ortom->id) }}">


@csrf

@method('DELETE')



<button type="submit"
class="btn-delete"
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