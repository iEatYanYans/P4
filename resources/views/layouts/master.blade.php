<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sleep Activity Tracker</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link href="/css/cover.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="/js/tracker.js"></script>

@yield('title')


  </head>
  <body>

      <div class="site-wrapper">
        @if(Session::get('flash_message') != null))
        <div class='flash_message'>{{ Session::get('flash_message') }}</div>
        @endif
        <div class="site-wrapper-inner">

          <div class="cover-container">

            <div class="masthead clearfix">
              <div class="inner">
                <h3 class="masthead-brand"><a href='/'>Sleep Tracker</a></h3>
                <nav>
                  <ul class="nav masthead-nav">
                    <li><a href="/login">Login</a></li> <!--#if active class='active'-->
                    <li><a href='/register'>Sign Up</a></li>
                    <li><button type='button' class='btn btn-secondary dropdown-toggle' id='dropdownMenuButton' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Features </button>
                      <div class= 'dropdown-menu' aria-labelledby='dropdownMenuButton'>
                        <a class= 'dropdown-item' href='/create'>New Entry</a><br>
                        <a class= 'dropdown-item' href='/history'>Entries</a><br>
                        <a class= 'dropdown-item' href='/graph'>Graph</a>
                      </div>
                      </li>
                    <li><a href="/logout">Logout</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            <section>
              @yield('content')
            </section>

          <!--  <div class="mastfoot">
              <div class="inner">
                <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
              </div>
            </div>  -->

          </div>

        </div>

      </div>

      @yield('body-top')

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"</script>
      <!--<script type="text/javascript" src="/js/tracker.js"></script>-->
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

      @yield('body')

    </body>
</html>
