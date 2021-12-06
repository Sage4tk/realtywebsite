<form class="px-5" method="POST" action="../postfiles/post_property.php">
    <div class="form-group mb-2">
        <label class="form-label">Property Name:</label>
        <input name="property" type="text" class="form-control" placeholder="Enter property name" required="true">
    </div>
    <div class="form-group mb-2">
        <label class="form-label">City:</label>
        <input name="city" type="text" class="form-control" placeholder="Enter city" required="true">
    </div>
    <div class="form-group mb-2">
        <label class="form-label">Description:</label>
        <input name="description" type="text" class="form-control" placeholder="Enter description" required="true">
    </div>
    <div class="form-group mb-2">
        <label class="form-label">Price:</label>
        <input name="price" type="text" class="form-control" placeholder="Enter price in AED" required="true">
    </div>
    <div class="form-group mb-2">
        <label class="form-label">Date:</label>
        <input name="date" type="text" class="form-control" placeholder="Enter date" required="true">
    </div>
    <div class="form-group  mb-2">
        <label class="form-label">Image Url:</label>
        <input name="url" type="text" class="form-control mb-1" placeholder="Enter main URL (also the thumbnail)" required="true">
        <input name="url2" type="text" class="form-control mb-1" placeholder="URL 2" required="true">
        <input name="url3" type="text" class="form-control mb-1" placeholder="URL 3">
        <input name="url4" type="text" class="form-control" placeholder="URL 4">
    </div>
    <div>
        <input type="submit" class="btn btn-primary">
    </div>
    <?php
        if(isset($_GET['error'])) {
            echo "<p>Invalid form</p>";
        }
    ?>
</form>