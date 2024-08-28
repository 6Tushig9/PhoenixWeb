<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Phoenix</title>
    <link rel="stylesheet" href={{ asset("css/PSHStyle.css") }}>
    <link rel="stylesheet" href={{ asset("css/swiper-bundle.min.css") }}>
    <script src={{asset('js/javascript/PSHjs.js')}}></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
   <x-header/>
<section>
    @yield("Phoenix")
</section>
    <x-footer/>
</body>
</html>
