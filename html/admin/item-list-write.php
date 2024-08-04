  <?php 
  require 'dbconn.php';

  // Query to fetch item details, corresponding category names, and map the "Category_ID", "Item_Status", and "Type" fields to integers
  $sql = "SELECT `items`.`Item_ID`, `items`.`Item_Name`, `items`.`Image`,
               CASE `items`.`Type`
                   WHEN 'Found' THEN 1
                   WHEN 'Lost' THEN 0
               END AS `Type`,
               CAST(`items`.`Category_ID` AS UNSIGNED) AS `Category_ID`, `categories`.`Category_Name`,
               CASE `items`.`Item_Status`
                   WHEN 'Posted' THEN 0
                   WHEN 'Claiming' THEN 1
                   WHEN 'Claimed' THEN 2
                   WHEN 'Returning' THEN 3
                   WHEN 'Returned' THEN 4
                   WHEN 'Retrieving' THEN 5
                   WHEN 'Retrieved' THEN 6
               END AS `Item_Status`,
               `items`.`Description`, `items`.`Pin_Location`, `items`.`Posted_Date`, `items`.`Current_Location`,
               `items`.`Poster_ID`, `items`.`Latitude`, `items`.`Longitude`, `items`.`Retrieved_By`, `items`.`Retrieved_Date`
        FROM `items`
        INNER JOIN `categories` ON `items`.`Category_ID` = `categories`.`Category_ID`
        ORDER BY `items`.`Item_ID` DESC";

  $result = $conn->query($sql);

  $data = array();

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      // Cast Type, Category_ID, and Item_Status as integers
      $row['Type'] = (int) $row['Type'];
      $row['Category_ID'] = (int) $row['Category_ID'];
      $row['Item_Status'] = (int) $row['Item_Status'];
      $data[] = $row;
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  // Convert the array to a JSON object
  $json_data = json_encode(array('data' => $data));

  // Write the JSON data to a file
  $success = file_put_contents('../../assets/json/item-list.json', $json_data);
  if (!$success) {
    echo "Error: Unable to write JSON data to file.";
  }
  ?>