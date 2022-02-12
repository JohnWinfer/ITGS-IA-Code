<?php
    $parentname = $_POST['parentname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $parentID = $_POST['parentID'];
    $childID = $_POST['childID'];
    $childsFName = $_POST['childsFName'];
    $childsMName = $_POST['childMName'];
    $childsLName = $_POST['childsLName'];
    $grade = $_POST['grade'];
    $gender = $_POST['gender'];

    $email_from = 'kaustcubssignup@gmail.com';
    $email_subject = "New Sign Up";
    $email_body = "Parent Name: $parentname \n".
                    "Parents Email: $email \n".
                        "Parents Number: $number \n".
                            "Parents Kaust ID: $parentID \n".
                                "Childs Kaust ID: $childID \n".
                                    "Childs First Name: $childsFName \n".
                                        "Childs Middle Names: $childsMName \n".
                                            "Childs Last Names: $childsLName \n".
                                                "Childs Grade: $grade \n".
                                                    "Childs Gender: $gender \n";
    $to = "kaustcubssignup@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>