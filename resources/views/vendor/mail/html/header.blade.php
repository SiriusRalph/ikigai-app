@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Ikizen')
{{-- <img src="home/assets/img/1-removebg-preview.png" class="logo" alt="Ikizen Logo"> --}}
<h1 style="color: #1853b2">IKIZEN</h1>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
