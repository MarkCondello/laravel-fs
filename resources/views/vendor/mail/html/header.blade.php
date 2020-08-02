<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
Logo Section
<img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/0017/8571/brand.gif?itok=EP1h4saU" alt="A style"/>
{{ $slot }}
@endif
</a>
</td>
</tr>
