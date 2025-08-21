<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $sharing = $_POST['sharing'];
    $person_count = $_POST['person-count'];
    $pickup = $_POST['pickup'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $postcode = $_POST['post-code'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@roamers.in';
        $mail->Password = 'iifr konl ctis tphr'; // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('info@roamers.in', 'Booking Form');
        $mail->addAddress('info@roamers.in');

        $mail->isHTML(true);
        $mail->Subject = 'NEW MUNNAR BOOKING RECEIVED';

        // Fix: AddEmbeddedImage requires a local file, not a URL.
        // Download the image temporarily and embed, or skip embedding if not possible.
        // We'll skip embedding and use the image URL directly in the HTML.
        // $mail->AddEmbeddedImage('https://www.roamers.in/assets/img/kolukkumalai-img/Jungle-Safari4.jpg', 'srilankaimg');

        $mail->Body = "
        <div style='
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(0,0,0,0.13);
            overflow: hidden;
            font-family: Segoe UI, Arial, sans-serif;
            border: 1px solid #e0e7ef;
        '>
            <div style='background: linear-gradient(90deg, #4ec0db 0%, #1e90ff 100%); padding: 32px 0 18px 0; text-align: center;'>
                <img src='https://www.roamers.in/assets/img/kolukkumalai-img/Jungle-Safari4.jpg' alt='srilankaimg' style='width: 100%; max-width: 420px; height: 180px; object-fit: cover; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); margin-bottom: 18px;' />
                <h2 style='color: #fff; font-size: 2.1rem; margin: 0 0 6px 0; letter-spacing: 1px; font-weight: 700;'>
                    <span style=\"vertical-align:middle; margin-right:8px;\"><img src='https://img.icons8.com/ios-filled/40/ffffff/island-on-water.png' style='width:32px;vertical-align:middle;'/></span>
                    MUNNAR BOOKING
                </h2>
                <div style='color: #e0f7fa; font-size: 1.1rem; margin-bottom: 8px; letter-spacing: 0.5px;'>
                    <span style=\"vertical-align:middle; margin-right:6px;\"><img src='https://img.icons8.com/ios-filled/20/ffffff/calendar--v1.png' style='width:18px;vertical-align:middle;'/></span>
                    $date
                </div>
            </div>
            <div style='padding: 28px 24px 32px 24px; background: #f8fcff;'>
                <table style='width:100%; border-collapse:collapse; font-size:1.05rem; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 1px 6px rgba(0,0,0,0.04);'>
                    <tbody>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; width: 38%; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/user.png'/></span>Name
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$name</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/new-post.png'/></span>Email
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$email</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/phone.png'/></span>Phone
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$phone</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/birthday-cake.png'/></span>Date of Birth
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$dob</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/gender-neutral-user.png'/></span>Gender
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$gender</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/calendar--v1.png'/></span>Travel Date
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$date</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/group-foreground-selected.png'/></span>Sharing
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$sharing</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/conference-call.png'/></span>No. of Travellers
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$person_count</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/marker.png'/></span>Pickup Location
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$pickup</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/address.png'/></span>Address 1
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$address1</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/address.png'/></span>Address 2
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$address2</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600; border-bottom:1px solid #e0e7ef;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/city.png'/></span>City
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #e0e7ef;'>$city</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#f2faff; color:#4ec0db; font-weight:600;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/4ec0db/marker.png'/></span>Post Code
                            </th>
                            <td style='padding:12px 10px;'>$postcode</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style='background: #4ec0db; color: #fff; text-align: center; padding: 14px 0; font-size: 1.08rem; letter-spacing: 0.5px;'>
                Thank you for booking your Munnar Trek with Roamers! <span style='margin-left:8px;'><img src='https://img.icons8.com/ios-filled/20/ffffff/checked-checkbox.png' style='vertical-align:middle;'/></span>
            </div>
        </div>
        ";

        $mail->send();

        // Show impressive thank you page after booking
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Thank You for Booking!</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
            <style>
                body {
                    background: #4ec0db;
                    padding: 20px;
                    min-height: 100vh;
                    margin: 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .thankyou-container {
                    background: #fff;
                    border-radius: 22px;
                    box-shadow: 0 8px 40px rgba(30, 144, 255, 0.13);
                    max-width: 430px;
                    width: 95%;
                    padding: 48px 32px 38px 32px;
                    text-align: center;
                    position: relative;
                    animation: popUp 0.7s cubic-bezier(.23, 1.12, .32, 1.01);
                }

                @keyframes popUp {
                    0% {
                        transform: scale(0.7) translateY(60px);
                        opacity: 0;
                    }

                    80% {
                        transform: scale(1.05) translateY(-8px);
                        opacity: 1;
                    }

                    100% {
                        transform: scale(1) translateY(0);
                        opacity: 1;
                    }
                }

                .thankyou-icon {
                    width: 80px;
                    height: 80px;
                    margin-bottom: 18px;
                    border-radius: 50%;
                    background: linear-gradient(120deg, #4ec0db 0%, #1e90ff 100%);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-left: auto;
                    margin-right: auto;
                    box-shadow: 0 2px 16px rgba(30, 144, 255, 0.13);
                }

                .thankyou-icon img {
                    width: 48px;
                    height: 48px;
                }

                .thankyou-title {
                    font-size: 2.1rem;
                    font-weight: 700;
                    color: #1e90ff;
                    margin-bottom: 10px;
                    letter-spacing: 1px;
                }

                .thankyou-msg {
                    font-size: 1.15rem;
                    color: #333;
                    margin-bottom: 22px;
                }

                .thankyou-details {
                    background: #f8fcff;
                    border-radius: 12px;
                    padding: 18px 16px 10px 16px;
                    margin-bottom: 18px;
                    font-size: 1.01rem;
                    color: #444;
                    text-align: left;
                    box-shadow: 0 1px 8px rgba(78, 192, 219, 0.06);
                }

                .thankyou-details strong {
                    color: #4ec0db;
                }

                .thankyou-btn {
                    background: linear-gradient(90deg, #4ec0db 0%, #1e90ff 100%);
                    color: #fff;
                    border: none;
                    border-radius: 8px;
                    padding: 12px 38px;
                    font-size: 1.08rem;
                    font-weight: 600;
                    cursor: pointer;
                    box-shadow: 0 2px 8px rgba(78, 192, 219, 0.08);
                    transition: background 0.2s;
                    margin-top: 10px;
                    text-decoration: none;
                    display: inline-block;
                }

                .thankyou-btn:hover {
                    background: linear-gradient(90deg, #1e90ff 0%, #4ec0db 100%);
                }

                @media (max-width: 600px) {
                    .thankyou-container {
                        padding: 32px 8px 24px 8px;
                    }
                }
            </style>
        </head>

        <body>
            <div class="thankyou-container">
                <div class="thankyou-icon">
                    <img src="https://img.icons8.com/fluency/96/checked-checkbox.png" alt="Success">
                </div>
                <div class="thankyou-title">Thank You for Booking!</div>
                <div class="thankyou-msg">
                    Your Munnar booking has been received.<br>
                    We can't wait to see you on your adventure!
                </div>
                <div class="thankyou-details">
                    <div><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></div>
                    <div><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></div>
                    <div><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></div>
                    <div><strong>Travel Date:</strong> <?php echo htmlspecialchars($date); ?></div>
                    <div><strong>No. of Travellers:</strong> <?php echo htmlspecialchars($person_count); ?></div>
                </div>
                <a href="index.php" class="thankyou-btn">Back to Home</a>
            </div>
        </body>

        </html>
        <?php
        exit;
    } catch (Exception $e) {
        // Fix: $mail may not be defined if exception is thrown before $mail is created
        $errorInfo = isset($mail) && isset($mail->ErrorInfo) ? htmlspecialchars($mail->ErrorInfo) : htmlspecialchars($e->getMessage());
        echo "<script>
            document.body.innerHTML += `<div id='srilanka-modal-error' style=\"
                position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:99999;
                background:rgba(0,0,0,0.32);display:flex;align-items:center;justify-content:center;\">
                <div style=\"
                    background:#fff;
                    border-radius:18px;
                    box-shadow:0 8px 32px rgba(0,0,0,0.18);
                    padding:38px 32px 32px 32px;
                    max-width:350px;
                    text-align:center;
                    position:relative;
                    font-family:Segoe UI,Arial,sans-serif;
                \">
                    <div style='margin-bottom:18px;'>
                        <img src='https://img.icons8.com/fluency/64/high-importance.png' style='width:54px;' alt='Error'/>
                    </div>
                    <h3 style='color:#e74c3c; font-size:1.5rem; margin-bottom:10px;'>Mailer Error</h3>
                    <div style='color:#333; font-size:1.08rem; margin-bottom:18px;'>" . $errorInfo . "</div>
                    <button onclick=\"window.location.href='index.php'\" style=\"
                        background:linear-gradient(90deg,#4ec0db 0%,#1e90ff 100%);
                        color:#fff;
                        border:none;
                        border-radius:8px;
                        padding:10px 32px;
                        font-size:1.08rem;
                        font-weight:600;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(78,192,219,0.08);
                        transition:background 0.2s;
                    \">Go to Home</button>
                </div>
            </div>`;
        </script>";
    }
} else {
    echo "Invalid Request.";
}
?>