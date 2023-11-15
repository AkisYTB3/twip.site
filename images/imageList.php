<?php
$dir = __DIR__ . '/'; // Assuming the images are in the same directory as this PHP script

// Get the list of all files with .png extension in the directory and save it in an array named $images
$images = glob($dir . '*.png');

// Extract only the name of the file without the extension and save in an array named $imageNames
$imageNames = array();
foreach ($images as $image) {
    $imageName = pathinfo($image, PATHINFO_FILENAME);
    $imageNames[] = $imageName;
}

// Convert the PHP array to a JSON string
$imageNamesJSON = json_encode($imageNames);
?>

<script>
    // Create a JavaScript variable with the image names array
    var imageNames = <?php echo $imageNamesJSON; ?>;
    console.log(imageNames); // You can use this array in your JavaScript code
</script>