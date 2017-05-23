@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Duplicate email address</div>

                    <div class="panel-body">
                        <h3>You will be redirected</h3><br>
                        <a href="/admin">Go to admin start page</a>
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
