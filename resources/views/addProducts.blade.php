<!DOCTYPE html>
<html>
<body>
        <h1>Add Product</h1>
    <form method="POST" action="products/store">
        @csrf

        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Category:</label>
        <input type="text" name="category" required><br><br>
        <label>Price:</label>
        <input type="number" name="price" required><br><br>
        <label>Stock:</label>
        <input type="number" name="stock" required><br><br>

        <button type="submit">Save</button>
    </form>
    
</body>
</html>