<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/security.php';
if (!empty($_POST)) { $_POST = clean_input($_POST); }
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
        $mail->Host = $smtp_configs['alt']['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_configs['alt']['user'];
        $mail->Password = $smtp_configs['alt']['pass']; // App password
        $mail->SMTPSecure = $smtp_configs['alt']['secure'];
        $mail->Port = $smtp_configs['alt']['port'];

        $mail->setFrom('info@roamers.in', 'Booking Form');
        $mail->addAddress('info@roamers.in');

        $mail->isHTML(true);
        $mail->Subject = 'NEW PONDICHERRY BOOKING RECEIVED';
        $mail->AddEmbeddedImage('assets/img/pondicherry/Media/20210219_164223.webp', 'pondicherryimg');

        $mail->Body = "
        <div style='
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(0,0,0,0.13);
            overflow: hidden;

            border: 1px solid #e0e7ef;
        '>
            <div style='background: linear-gradient(90deg, #ffb347 0%, #ffcc33 100%); padding: 32px 0 18px 0; text-align: center;'>
                <img src='cid:pondicherryimg' alt='pondicherryimg' style='width: 100%; max-width: 420px; height: 180px; object-fit: cover; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); margin-bottom: 18px;' />
                <h2 style='color: #fff; font-size: 2.1rem; margin: 0 0 6px 0; letter-spacing: 1px; font-weight: 700;'>
                    <span style=\"vertical-align:middle; margin-right:8px;\"><img src='https://img.icons8.com/ios-filled/40/ffffff/beach.png' style='width:32px;vertical-align:middle;'/></span>
                    PONDICHERRY ESCAPADE
                </h2>
                <div style='color: #fffbe7; font-size: 1.1rem; margin-bottom: 8px; letter-spacing: 0.5px;'>
                    <span style=\"vertical-align:middle; margin-right:6px;\"><img src='https://img.icons8.com/ios-filled/20/ffffff/calendar--v1.png' style='width:18px;vertical-align:middle;'/></span>
                    $date
                </div>
            </div>
            <div style='padding: 28px 24px 32px 24px; background: #fffbe7;'>
                <table style='width:100%; border-collapse:collapse; font-size:1.05rem; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 1px 6px rgba(0,0,0,0.04);'>
                    <tbody>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; width: 38%; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/user.png'/></span>Name
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$name</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/new-post.png'/></span>Email
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$email</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/phone.png'/></span>Phone
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$phone</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/birthday-cake.png'/></span>Date of Birth
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$dob</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/gender-neutral-user.png'/></span>Gender
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$gender</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/calendar--v1.png'/></span>Travel Date
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$date</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/group-foreground-selected.png'/></span>Sharing
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$sharing</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/conference-call.png'/></span>No. of Travellers
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$person_count</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/marker.png'/></span>Pickup Location
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$pickup</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/address.png'/></span>Address 1
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$address1</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/address.png'/></span>Address 2
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$address2</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600; border-bottom:1px solid #ffe7a3;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/city.png'/></span>City
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #ffe7a3;'>$city</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#fff7e0; color:#ffb347; font-weight:600;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/ios-filled/18/ffb347/marker.png'/></span>Post Code
                            </th>
                            <td style='padding:12px 10px;'>$postcode</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style='background: #ffb347; color: #fff; text-align: center; padding: 14px 0; font-size: 1.08rem; letter-spacing: 0.5px;'>
                Thank you for booking your Pondicherry Escapade with Roamers! <span style='margin-left:8px;'><img src='https://img.icons8.com/ios-filled/20/ffffff/checked-checkbox.png' style='vertical-align:middle;'/></span>
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
                    background: #ffb347;
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
                    box-shadow: 0 8px 40px rgba(255, 179, 71, 0.13);
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
                    background: linear-gradient(120deg, #ffb347 0%, #ffcc33 100%);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-left: auto;
                    margin-right: auto;
                    box-shadow: 0 2px 16px rgba(255, 179, 71, 0.13);
                }

                .thankyou-icon img {
                    width: 48px;
                    height: 48px;
                }

                .thankyou-title {
                    font-size: 2.1rem;
                    font-weight: 700;
                    color: #ffb347;
                    margin-bottom: 10px;
                    letter-spacing: 1px;
                }

                .thankyou-msg {
                    font-size: 1.15rem;
                    color: #333;
                    margin-bottom: 22px;
                }

                .thankyou-details {
                    background: #fffbe7;
                    border-radius: 12px;
                    padding: 18px 16px 10px 16px;
                    margin-bottom: 18px;
                    font-size: 1.01rem;
                    color: #444;
                    text-align: left;
                    box-shadow: 0 1px 8px rgba(255, 179, 71, 0.06);
                }

                .thankyou-details strong {
                    color: #ffb347;
                }

                .thankyou-btn {
                    background: linear-gradient(90deg, #ffb347 0%, #ffcc33 100%);
                    color: #fff;
                    border: none;
                    border-radius: 8px;
                    padding: 12px 38px;
                    font-size: 1.08rem;
                    font-weight: 600;
                    cursor: pointer;
                    box-shadow: 0 2px 8px rgba(255, 179, 71, 0.08);
                    transition: background 0.2s;
                    margin-top: 10px;
                    text-decoration: none;
                    display: inline-block;
                }

                .thankyou-btn:hover {
                    background: linear-gradient(90deg, #ffcc33 0%, #ffb347 100%);
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
                    Your Pondicherry Escapade booking has been received.<br>
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
        echo "<script>
            document.body.innerHTML += `<div id='pondicherry-modal-error' style=\"
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

                \">
                    <div style='margin-bottom:18px;'>
                        <img src='https://img.icons8.com/fluency/64/high-importance.png' style='width:54px;' alt='Error'/>
                    </div>
                    <h3 style='color:#e74c3c; font-size:1.5rem; margin-bottom:10px;'>Mailer Error</h3>
                    <div style='color:#333; font-size:1.08rem; margin-bottom:18px;'>" . htmlspecialchars($mail->ErrorInfo) . "</div>
                    <button onclick=\"window.location.href='index.php'\" style=\"
                        background:linear-gradient(90deg,#ffb347 0%,#ffcc33 100%);
                        color:#fff;
                        border:none;
                        border-radius:8px;
                        padding:10px 32px;
                        font-size:1.08rem;
                        font-weight:600;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(255,179,71,0.08);
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