<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forum</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/modern-business.css')  }}" rel="stylesheet"> 

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="index.html">Forum</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!--a class="nav-link" href="">Contact</a-->
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">

        <div class="row">

            <div class="col-lg-3 mt-5">
                <div class="list-group">
                    <a href="{{  route('categories.index')  }}" class="list-group-item" >Liste des categories</a>
                    <a href="{{  route('topics.index')  }}" class="list-group-item" >Listes des  sujets</a>
                    <a href="#" class="list-group-item" >Foire aux questions</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="mt-5 col-lg-12">
                    @include('partials.error')
                </div>
                @yield('content')
            </div>

        </div>

    </div>



<!-- Bootstrap core JavaScript -->
<script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')  }}"></script>

</body>

</html>
