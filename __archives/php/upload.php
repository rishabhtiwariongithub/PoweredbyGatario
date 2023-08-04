<?php
if(isset($_FILES['Image']) && $_FILES['Image']['error'] === UPLOAD_ERR_OK)
{
    $filename = $_FILES['Image']['name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $valid_extensions = array("jpeg", "jpg", "png", "gif");

    if(in_array(strtolower($extension), $valid_extensions))
    {
        // To avoid potential name clashes, use a more robust method to generate a unique name.
        $new_name = uniqid() . "." . $extension;
        $path = "img/" . $new_name;

        if(move_uploaded_file($_FILES['Image']['tmp_name'], $path))
        {
            // Properly close the button tag and use htmlspecialchars to prevent potential XSS vulnerabilities.
            echo '<img src="' . htmlspecialchars($path) . '"/><br><br><button data-path="' . htmlspecialchars($path) . '" id="deleteEvent">Delete</button>';
        }
        else
        {
            echo '<script>alert("Error while uploading the file.")</script>';
        }
    }
    else
    {
        echo '<script>alert("Invalid File Format")</script>';
    }
}
else
{
    echo '<script>alert("Please Select a file")</script>';
}
?>
