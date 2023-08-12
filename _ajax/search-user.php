<?php

require __DIR__ . '/../_modules/config.php';

if (isset($_POST['search'])) {
    $search_value = trim($_POST['search']); // Trim the search value to remove leading/trailing spaces

    if (strlen($search_value) >= 3) { // Check if at least three characters are entered for the search
        if ($connection) {
            $sql = "SELECT * FROM logindetails WHERE firstname LIKE ? OR lastname LIKE ?";
            $stmt = mysqli_prepare($connection, $sql);

            // Bind the search value to the prepared statement as a parameter not to get sql injections
            $search_term = "%{$search_value}%";
            mysqli_stmt_bind_param($stmt, "ss", $search_term, $search_term);

            // Execute the query
            mysqli_stmt_execute($stmt);

            // Get the result
            $result = mysqli_stmt_get_result($stmt);

            $output = "";

            if (mysqli_num_rows($result) > 0) {
                // Build the search results
                while ($row = mysqli_fetch_assoc($result)) {
                    $output .= "<div class='searchResultItem'>";
                    $output .= "<span class='searchResultName'>{$row['firstname']} {$row['lastname']}</span>";
                    $output .= "</div>";
                }
            } else {
                $output = "<p class='noSearchResults'>No results found</p>";
            }

            mysqli_stmt_close($stmt);
        } else {
            $output = "<p class='noSearchResults'>Database connection failed</p>";
        }
    } else {
        $output = "<p class='noSearchResults'>Please enter at least three characters for the search.</p>";
    }
} else {
    $output = "<p class='noSearchResults'>Invalid search query</p>";
}

echo $output;
?>
