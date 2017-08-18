<html>
    <head>
        <title>@lang('global.app') | @lang('index.page')</title>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div id="amazon-root"></div>
        <script src="{{ URL::asset('js/loginWithAmazonScript.js') }}" type="text/javascript"></script>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button><a class="navbar-brand" href="#">@lang('global.app')</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </nav>
                    <div class="container">
                        <div class="jumbotron">
                            <h2>
                                @lang('index.welcome')
                            </h2>
                            <p>
                                @lang('index.message')
                            </p>
                            <p>
                                <p class="text-center">
                                    <h1><a class="btn btn-primary btn-large" href="#" id="LoginWithAmazon"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> @lang('index.loginButton')</a></h1>
                                </p>
                                <script type="text/javascript">
                                    document.getElementById("LoginWithAmazon").onclick = function() {
                                        options = { scope : "profile" };
                                        amazon.Login.authorize(options, "login");
                                        return false;
                                    };
                                </script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
