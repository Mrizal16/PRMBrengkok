<footer>


<div class="footer-contact">


@if($setting->email_icon)

<img src="{{ asset('storage/'.$setting->email_icon) }}"
width="25">

@endif


<span>
{{ $setting->email }}
</span>



@if($setting->instagram_icon)

<img src="{{ asset('storage/'.$setting->instagram_icon) }}"
width="25">

@endif


<span>
{{ $setting->instagram }}
</span>



</div>


</footer>