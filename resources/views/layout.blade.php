<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact US</a>
        </li>
      </ul>
      <form class="d-flex">
        <select name="" id="" class="form-control changeLang">
          <option value="en"{{session()->get('locale')== 'en' ? 'selected' : ''}}>English</option>
          <option value="bn"{{session()->get('locale')== 'bn' ? 'selected' : ''}}>Bangla</option>
        </select>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  @yield('conatin')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
      // Ensure jQuery is loaded and document is ready
    $(document).ready(function() {
        $('.changeLang').change(function() {
            // Define the URL using Blade syntax for route
            var url = "{{ route('change') }}";
            // Redirect to the new URL with the query parameter
            window.location.href = url + "?lang=" + encodeURIComponent($(this).val());
        });
    });

</script>
</body>
</html>


