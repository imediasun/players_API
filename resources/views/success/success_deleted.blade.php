@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">das Unternehmen entfernt</div>

                <div class="panel-body">
                    <h3>Sie werden auf die Seite Server-Betreiber weitergeleitet</h3><br>
                    <a href="/">Zum Ort</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>

    function func() {

    location.href='/admin/kunden';
    }

    setTimeout(func, 4000);
</script>
