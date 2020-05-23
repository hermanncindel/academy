
@extends ('layouts.user.default')

@section('content')
    <!-- Main content -->
@section('title')
    <h1 class="text-white">
        Volontariat
    </h1>
@endsection

<!-- la redirection de la page vers l'accueil -->
{{--
@section('menu')
    <p class="text-white link-nav"><a href="{{route('accueil')}}">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('soutien')}}">Volontariat</a></p>
@endsection
--}}

<!-- contenu de la page  -->

@section('content')

    <center >

        <div style="margin-top: -2px"><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfB8QilEtgrv9P2c5cwgWlcRexjthftG41QYPMuI0GKqkXJRA/viewform?embedded=true" width="100%" height="750" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe></div>

    </center>>
@endsection

    <!-- /.content -->

<!-- title page -->

@stop
