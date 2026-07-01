<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAviGen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @stack('style')
    <style>
      *{
        box-sizing: border-box;
      }
[data-bs-theme="light"] {
  --bs-nav:#ffffff;
  --bs-body-bg: #f1f2fab9;
  --bs-body-color: #000000;
  --bs-primary:#f1f5f9;
  --bs-card:#ffffff;
  --bs-card-border:1px solid #e2e8f0;
  --bs-svg:#eff6ff;
  --bs-navcolor:#64748b;
  --bs-label:linear-gradient(135deg, #f0f4ff, #e8f0fe, #f5f0ff);
}
[data-bs-theme="dark"] {
  --bs-nav:#121212;
  --bs-body-bg: #0000;
  --bs-body-color: #f0f0f0;
  --bs-primary:#121212;
  --bs-card:rgb(13 13 26);
  --bs-card-border:none;
  --bs-svg:#6366f11a;
  --bs-navcolor:rgb(148 163 184);
  --bs-label:#6366f11a;
  
}    </style>
  </head>
  <body>
   <div class="container-fluid p-0">
        @yield('navbar')
        @yield('pages')
        @yield('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @stack('scripts')
  </body>
</html>