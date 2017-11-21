<!doctype html>
<html>
<head>
  <title>Library</title>
  <style>
    .centerDiv {
      width: 50%;
      height: 50%;
      background-color: #DCDCDC;
      border-style: groove;
      border-radius: 5px;
      border-color: #5F9EA0;

      position: absolute;
      top:0;
      bottom: 0;
      left: 0;
      right: 0;

      margin: auto;
    }
    .signUpDiv {
      width: 50%;
      height: 50%;

      position: absolute;
      top:0;
      bottom: 0;
      left: 0;
      right: 0;

      margin: auto;
      padding: 5px;
    }
    .error {
      background-color: #ff4d4d;
      border: 1px solid #000022;
      padding: 5px;
    }
  </style>
</head>
<body>
  <div class="centerDiv">
    @yield('content')
  </div>
</body>
</html>
