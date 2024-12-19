<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    @vite('resources/js/app.jsx')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="search-container">
        <input type="text" id="search-box" class="search-box" placeholder="Search...">
    </div>
    <div id="product-table"></div>
    <script>
        window.products = {!! json_encode($products) !!};
    </script>

<table class="table table-responsive">

<tr><th>Name</th>
<th>Description</th>
<th>Price</th>

</tr>
@foreach($products AS $products)
<tr><td>
{{$products->name}}</td><td>
{{$products->description}}</td><td>
{{$products->price}}</td>

@endforeach

</table>
<script>
        document.getElementById('search-box').addEventListener('input', function() {
            var searchQuery = this.value.toLowerCase();
            var items = document.querySelectorAll('#items-list li');

            items.forEach(function(item) {
                var itemText = item.textContent.toLowerCase();
                if (itemText.includes(searchQuery)) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
