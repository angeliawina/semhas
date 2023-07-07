@extends('layouts.backend.main')


@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


        {{-- Bootstrap CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <title>Grid System</title>
    </head>

    <body>

        <div class="container-fluid py-5" style="background-color: #E8E8E8;">
            <div class="container">

                <div class="col-12">
                    <h1 class="text-center">Belajar Grid System</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-9 text-end">
                    Lorem Ipsum is simply dummy text
                    of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into
                </div>

                <div class="col-2 offset-1">
                    Lorem Ipsum is simply dummy text
                    of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries,
                </div>
            </div>
        </div>
        </div>

        <div class="container-fluid py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>My Galery</h1>
                        <p>Foto Collection since 2000</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-3">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-2">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('images/sigbs logo.png') }}" alt="logo" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" style="background-color: #E8E8E8;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Layout Website</h1>
                        <p>with grid system bootstrap 5</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-4">
                        <img src="Asset/img/Rectangle 15.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-4 text-center offset-1">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into
                    </div>

                    <div class="col-2 offset-1">
                        <button class="btn btn-primary">let's start</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
                                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
                                            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
                                        </script>
                                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
                                            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
                                        </script>
                                        -->

    </body>

    </html>
@endsection
