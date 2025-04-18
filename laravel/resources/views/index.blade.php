    @include('includes.start')

    @include('includes.navbar')
    
    @include('includes.header')
    @vite('resources/js/users/index.js')
    <main class="nxl-container">
        <div id="app">
            <index></index>
        </div>
    </main>


    <script>
        window.Laravel = {
            userId: {{ auth()->check() ? auth()->id() : 'null' }}
        };
    </script>
    
@include('includes.script')
