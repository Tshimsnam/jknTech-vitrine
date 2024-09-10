<x-app-layout>
    @section('content')
        <!-- Hero Section -->
        @include('partials.hero')
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        @include('partials.features')
        <!-- /Featured Services Section -->

        <!-- About Section -->
        @include('partials.about')
        <!-- /About Section -->

        <!-- Why Us Section -->
        @include('partials.why-us')
        <!-- /Why Us Section -->

        <!-- Clients Section -->
        @include('partials.clients')
        <!-- /Clients Section -->

        <!-- Services Section -->
        @include('partials.services')
        <!-- /Services Section -->

        <!-- Call To Action Section -->
        @include('partials.cta')
        <!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        @include('partials.portfolio')
        <!-- /Portfolio Section -->

        <!-- Team Section -->
        @include('partials.team')
        <!-- /Team Section -->

        <!-- Contact Section -->
        @include('partials.contact')
        <!-- /Contact Section -->
    @endsection

</x-app-layout>
