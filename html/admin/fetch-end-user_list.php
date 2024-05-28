<?php
require 'dbconn.php';

$sql = "SELECT user_id, role, username, fullname, password, user_type, email, avatar_image, college, course, clsu_id_image, home_address, clsu_address, contact, social_links FROM users";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $links = explode(',', $row['social_links']);
    $social_links = array();
    foreach ($links as $link) {
      if (preg_match('~me\.me/~', $link)) {
        $social_links['messenger'] = $link;
      } elseif (preg_match('~t\.me/~', $link)) {
        $social_links['telegram'] = $link;
      } elseif (preg_match('~viber\.com/~', $link)) {
        $social_links['viber'] = $link;
      } elseif (preg_match('~wa\.me/~', $link)) {
        $social_links['whatsapp'] = $link;
      } elseif (preg_match('~linkedin\.com/~', $link)) {
        $social_links['linkedin'] = $link;
      } elseif (preg_match('~facebook\.com/~', $link)) {
        $social_links['facebook'] = $link;
      } elseif (preg_match('~twitter\.com/~', $link)) {
        $social_links['twitter'] = $link;
      } elseif (preg_match('~instagram\.com/~', $link)) {
        $social_links['instagram'] = $link;
      }
    }
    unset($row['social_links']);
    $row['social_links'] = $social_links;
    $data[] = $row;
  }
} else {
  echo "0 results";
}
$conn->close();

// Convert the array to a JSON object
$json_data = json_encode(array('data' => $data));

// Write the JSON data to a file
$success = file_put_contents('../../assets/json/user-end-list.json', $json_data);
if (!$success) {
  echo "Error: Unable to write JSON data to file.";
}

// For debugging purposes, print the JSON data
echo $json_data;
