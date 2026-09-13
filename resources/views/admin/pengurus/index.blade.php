@extends('layouts.app')


@section('content')


<section class="admin-dashboard">



<div class="admin-header">


<h1>
Data Pengurus PRM Brengkok
</h1>


<a href="{{ route('admin.dashboard') }}" class="btn-kembali">
    ← Kembali
</a>
<a href="{{ route('admin.pengurus.create') }}"
class="btn-card">

+ Tambah Pengurus

</a>



</div>





<div class="aum-admin-container">



@foreach($penguruses as $pengurus)



<div class="aum-admin-card">





<div class="aum-preview">


@if($pengurus->gambar)


<img src="{{ asset('storage/'.$pengurus->gambar) }}"
alt="{{ $pengurus->nama }}">



@else


<img src="{{ asset('assets/images/default.jpg') }}">



@endif



</div>





<div class="aum-content">



<h3>
{{ $pengurus->nama }}
</h3>



<p>

<strong>
{{ $pengurus->jabatan }}
</strong>

</p>



<p>

{{ Str::limit($pengurus->deskripsi,120,'...') }}

</p>





<div class="aum-action">



<a href="{{ route('admin.pengurus.edit',$pengurus->id) }}"
class="btn-edit">

Edit

</a>






<form method="POST"
action="{{ route('admin.pengurus.destroy',$pengurus->id) }}">


@csrf

@method('DELETE')



<button type="submit"
class="btn-delete"
onclick="return confirm('Hapus data pengurus ini?')">

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