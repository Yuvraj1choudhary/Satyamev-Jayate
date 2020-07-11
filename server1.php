    <?php
    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $name = filter_input(INPUT_POST, 'name');
    $phone = filter_input(INPUT_POST, 'phone');
    $state = filter_input(INPUT_POST, 'state');
    $department = filter_input(INPUT_POST, 'department');
    $subdepartment = filter_input(INPUT_POST, 'subdepartment');
    $post = filter_input(INPUT_POST, 'post');
    $complaint_against = filter_input(INPUT_POST, 'complaint_against');
    $complaints = filter_input(INPUT_POST, 'complaints');
    $google_drive_link = filter_input(INPUT_POST, 'google_drive_link');
    if (!empty($username)){
    if (!empty($email)){
    if (!empty($name)){
    if (!empty($phone)){
    if (!empty($state)){
    if (!empty($department)){
    if (!empty($subdepartment)){
    if (!empty($post)){
    if (!empty($complaint_against)){
    if (!empty($google_drive_link)){
    $host = "localhost";
    $dbusername = "id10518661_complaintssatyamevjayate";
    $dbpassword = "Yuvraj@123";
    $dbname = "id10518661_complaints";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO complaints (username, email,name,phone,state,department,subdepartment,post,compalints_against,complaints,google_drive_link)
    values ('$username','$email','$name','$phone','$state','$department','$subdepartment','$post','$complaint_against','$complaints',''$google_drive_link)";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "Username should not be empty";
    die();
    }
    }
    }
    }
    }
    }
    }
    }
    }
    ?>