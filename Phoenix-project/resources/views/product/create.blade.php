<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>

        <label for="product_feature_id">Feature:</label>
        <select id="product_feature_id" name="product_feature_id" required>
            @foreach ($features as $feature)
                <option value="{{ $feature->id }}">{{ $feature->features }}</option>
            @endforeach
        </select>

        <label for="product_model_id">Model:</label>
        <select id="product_model_id" name="product_model_id" required>
            @foreach ($models as $model)
                <option value="{{ $model->id }}">{{ $model->model }} - ${{ $model->price }}</option>
            @endforeach
        </select>

        <button type="submit">Create Product</button>
    </form>
</body>
</html>
