<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('custom.css')}}"  />

</head>
<body>
<div class="custom-login container">
    <div class="row">
        <div class="col-md-4 offset-md-4 align">
            <img class="mb-3 align" src=data:image/png;base64,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>
            <label>E-mail ou password Errados. Tente Novamente.</label>
            <a href="/"><button type="button" class="btn btn-danger">Tentar Novamente</button></a>

        </div>
    </div>
</div>
<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

