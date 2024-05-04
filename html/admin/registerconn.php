<?php
require('dbconn.php');
?>

<?php
if (isset($_POST['signup'])) {
    $userID = $_POST['User_ID'];
    $role = $_POST['Role'];
    $username = $_POST['Username'];
    $fullName = $_POST['FullName'];
    $password = $_POST['Password'];
    $userType = $_POST['User_Type'];
    $email = $_POST['Email'];
    $college = $_POST['College'];
    $course = $_POST['Course'];
    $clsuIDImage = $_FILES['CLSU_ID_Image'];
    $homeAddress = $_POST['Home_Address'];
    $clsuAddress = $_POST['CLSU_Address'];
    $contact = $_POST['Contact'];
    $socialLinks = $_POST['Social_Links'];


    $clsuIDImageName = $clsuIDImage['name'];
    $clsuIDImageSize = $clsuIDImage['size'];
    $clsuIDImageTmpName = $clsuIDImage['tmp_name'];
    $clsuIDImageError = $clsuIDImage['error'];

    if ($clsuIDImageError === 0) {
        $clsuIDImageEx = pathinfo($clsuIDImageName, PATHINFO_EXTENSION);
        $clsuIDImageExLc = strtolower($clsuIDImageEx);
        $allowedExs = array("jpg", "jpeg", "png");

        if (in_array($clsuIDImageExLc, $allowedExs)) {
            $newClsuIDImageName = uniqid("IMG-", true) . '.' . $clsuIDImageExLc;
            $clsuIDImageUploadPath = '../assets/uploads/' . $newClsuIDImageName;
            move_uploaded_file($clsuIDImageTmpName, $clsuIDImageUploadPath);

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $currentDateTime = date('Y-m-d H:i:s');

            $sql = "INSERT INTO ulaf.users (User_ID, Role, Username, FullName, Password, User_Type, Email, College, Course, CLSU_ID_Image, Home_Address, CLSU_Address, Contact, Social_Links, Date_Registered)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isssssssssssss", $userID, $role, $username, $fullName, $hashedPassword, $userType, $email, $college, $course, $newClsuIDImageName, $homeAddress, $clsuAddress, $contact, $socialLinks, $currentDateTime);

            if ($stmt->execute()) {
                echo '<script>window.location.href="scanner.php";</script>';
                exit();
            } else {
                echo <<<ERRORINSERT
    <div class="modal fade" id="insertErrorModal" tabindex="-1" role="dialog" aria-labelledby="insertErrorModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="insertErrorModalLabel">Registration Error</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <strong>Error!</strong> An error occurred while registering the user.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script>
    $(document).ready(function(){
        $('#insertErrorModal').modal('show');
    });
    </script>
    ERRORINSERT;
            }

            $stmt->close();
        }
    }
}
$conn->close();
?>