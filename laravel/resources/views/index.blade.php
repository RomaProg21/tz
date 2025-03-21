    @include('includes.start')

    @include('includes.navbar')
    
    @include('includes.header')
    @vite('resources/js/users/index.js')
    <main class="nxl-container">
        <div id="app">
            <index></index>
        </div>
    </main>

    
@include('includes.script')