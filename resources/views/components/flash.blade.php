@props(['message'])

<div class="notification"
     x-data="{ show : true }"
     x-init="setTimeout(() => show = false, 4000)"
     x-show="show">
    {{ $message }}
</div>
