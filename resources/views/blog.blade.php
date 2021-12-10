<html>
<head>
    <title></title>
    {!! SEO::generate() !!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 8- SEO</h2>
                </div>
                <div class="card-body">
                    <h1>{{ $title }}</h1>
                    <h2>{{ $description }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
