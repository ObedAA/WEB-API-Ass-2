<?php 
    $imageFile = $_FILES['pic']['tmp_name'];
    $imageFileContents = file_get_contents($imageFile);
    $withBase64 = base64_encode($imageFileContents);
    $imageType = substr($imageFile ,strrpos($imageFile, '.')+1, strlen($imageFile));

    
    echo '<div class="repBox">
        <h4>Registration Information</h4>

        <div class="userinfo">
            <div class="profile_image">
                <img src="data:image/'.$imageType.';base64,'.$withBase64.'" alt="" />
            </div>
            <div class="info">
                <p>Full name: <span>'.$_POST['name'].'</span></p>
                <p>Date of Birth: <span>'.$_POST['dob'].'</span></p>
                <p>Email: <span>'.$_POST['email'].'</span></p>
                <p>Phone Number: <span>'.$_POST['phone'].'</span></p>
                <p>Gender: <span>'.$_POST['gender'].'</span></p>
                <p>Marital Status: <span>'.$_POST['mStatus'].'</span></p>
                <p>Identification No.: <span>'.$_POST['cardId'].'</span></p>
            </div>
        </div>

        <a href="home.html">Reset</a>
    </div>';
?>