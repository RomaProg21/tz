@include('includes.start')

@include('includes.navbar')

@include('includes.header')
@vite('resources/js/notifications/notification.js')
<main class="nxl-container">
    <div id="notification">
        <notification></notification>
    </div>
</main>

<script>
    window.Laravel = {
        userId: {{ auth()->check() ? auth()->id() : 'null' }}
    };
</script>

@include('includes.script')