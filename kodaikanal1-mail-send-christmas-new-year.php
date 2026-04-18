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
        $mail->Subject = '🎄 New Christmas Kodaikanal Booking Received';
        $mail->AddEmbeddedImage('assets/img/kodaikanal/Kodai.jpg', 'kodaichristmasimg');

        // SINGLE COLOR THEME: #C51A1A (red) with gold accent
        // Add Christmas icons as decoration in header/footer

        $mail->Body = "
        <div style='
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(0,0,0,0.13);
            overflow: hidden;
            border: 2.5px solid #C51A1A;
        '>
            <div style='background:#C51A1A; padding: 24px 0 16px 0; text-align: center; position: relative;'>
         
                <img src='cid:kodaichristmasimg' alt='kodaikanal christmas' style='width: 96%; max-width: 520px; height: 320px; object-fit: cover; border-radius: 12px; box-shadow: 0 2px 12px rgba(197,26,26,0.08); margin-bottom: 18px; margin-top:35px;' />
                <h2 style='color: #fff; font-size: 2.1rem; margin: 0 0 3px 0; letter-spacing: 1px; font-weight: 700; text-shadow:0 4px 20px rgba(197,26,26,0.22);'>
                    <span style=\"vertical-align:middle; margin-right:8px;\"><img src='https://img.icons8.com/color/48/christmas-star.png' style='width:32px;vertical-align:middle;'/></span>
                    Christmas Kodaikanal
                    <span style='margin-left:8px;'><img src=\"https://img.icons8.com/emoji/48/christmas-tree-emoji.png\" style='width:32px;vertical-align:middle;'></span>
                </h2>
                <div style='color: #ffd700; font-size: 1.12rem; margin-bottom: 6px; letter-spacing: 0.5px; text-shadow: 0 0 8px #fff; font-weight:600;'>
                    <span style=\"vertical-align:middle; margin-right:6px;\"><img src='https://img.icons8.com/color/28/calendar--v1.png' style='width:18px;vertical-align:middle;'/></span>
                    $date
                </div>
            </div>
            <div style='padding: 28px 24px 32px 24px; background: #fff; border-bottom: 3px dashed #C51A1A;'>
                <table style='width:100%; border-collapse:collapse; font-size:1.06rem; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 1px 6px rgba(12,94,35,0.08);'>
                    <tbody>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFEDED; color:#C51A1A; width: 38%; font-weight:600; border-bottom:1px solid #efcfcf;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/santa-hat.png'/></span>Name
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #efcfcf;'>$name</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFF9F2; color:#C51A1A; font-weight:600; border-bottom:1px solid #fce2c1;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/mailbox.png'/></span>Email
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #fce2c1;'>$email</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFEDED; color:#C51A1A; font-weight:600; border-bottom:1px solid #efcfcf;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/christmas-star.png'/></span>Phone
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #efcfcf;'>$phone</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFF9F2; color:#C51A1A; font-weight:600; border-bottom:1px solid #fce2c1;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/gift--v1.png'/></span>Date of Birth
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #fce2c1;'>$dob</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFEDED; color:#C51A1A; font-weight:600; border-bottom:1px solid #efcfcf;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/christmas-tree.png'/></span>Gender
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #efcfcf;'>$gender</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFF9F2; color:#C51A1A; font-weight:600; border-bottom:1px solid #fce2c1;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/calendar--v1.png'/></span>Travel Date
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #fce2c1;'>$date</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFEDED; color:#C51A1A; font-weight:600; border-bottom:1px solid #efcfcf;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/gingerbread-man.png'/></span>Sharing
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #efcfcf;'>$sharing</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFF9F2; color:#C51A1A; font-weight:600; border-bottom:1px solid #fce2c1;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/group-foreground-selected.png'/></span>No. of Travellers
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #fce2c1;'>$person_count</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFEDED; color:#C51A1A; font-weight:600; border-bottom:1px solid #efcfcf;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/marker.png'/></span>Pickup Location
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #efcfcf;'>$pickup</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFF9F2; color:#C51A1A; font-weight:600; border-bottom:1px solid #fce2c1;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/address.png'/></span>Address 1
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #fce2c1;'>$address1</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFEDED; color:#C51A1A; font-weight:600; border-bottom:1px solid #efcfcf;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/address.png'/></span>Address 2
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #efcfcf;'>$address2</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFF9F2; color:#C51A1A; font-weight:600; border-bottom:1px solid #fce2c1;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/city-block.png'/></span>City
                            </th>
                            <td style='padding:12px 10px; border-bottom:1px solid #fce2c1;'>$city</td>
                        </tr>
                        <tr>
                            <th style='text-align:left; padding:12px 10px; background:#FFEDED; color:#C51A1A; font-weight:600;'>
                                <span style=\"margin-right:7px;\"><img src='https://img.icons8.com/color/24/mailbox-with-mail.png'/></span>Post Code
                            </th>
                            <td style='padding:12px 10px;'>$postcode</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style='background: #C51A1A; color: #fff; text-align: center; padding: 16px 0; font-size: 1.16rem; letter-spacing: 0.5px; border-bottom-left-radius:18px; border-bottom-right-radius:18px;'>
                <span style='font-size:1.15em;'>🎄</span> Thank you for booking your <span style='color:#ffd700;'>Christmas</span> Kodaikanal Escapade with Roamers! <span style='font-size:1.15em;'>🎁</span>
                <span style='margin-left:6px;font-size:1.1em;'><img src='https://img.icons8.com/fluency/20/checked-checkbox.png' style='vertical-align:middle;'/></span>
                <br />
                <span style='font-size:20px;'>⛄❄️ Have a magical holiday! ❄️⛄</span>
            </div>
        </div>
        ";

        $mail->send();

        // Show Christmas-themed thank you page after booking
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Thank You for Booking!</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
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
                    background: #4ec0db;
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
                    color: #4ec0db;
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
                    background: #4ec0db;
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
                    /* background: linear-gradient(90deg, #1e90ff 0%, #4ec0db 100%); */
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
                    <img src="assets/img/Logo/Logo mark-01.png" alt="Success">
                </div>
                <div class="thankyou-title">Thank You for Booking!</div>
                <div class="thankyou-msg">
                    Your Ultimate Ladakh Circuit - 7 Days booking has been received.<br>
                    We can't wait to see you on your adventure!
                </div>
                <div class="thankyou-details">
                    <div><strong style="margin-right: 10px;">Name :</strong> <?php echo htmlspecialchars($name); ?></div>
                    <div><strong style="margin-right: 10px;">Email :</strong> <?php echo htmlspecialchars($email); ?></div>
                    <div><strong style="margin-right: 10px;">Phone :</strong> <?php echo htmlspecialchars($phone); ?></div>
                    <div><strong style="margin-right: 10px;">Travel Date :</strong> <?php echo htmlspecialchars($date); ?></div>
                    <div><strong style="margin-right: 10px;">No. of Travellers :</strong> <?php echo htmlspecialchars($person_count); ?></div>
                </div>
                <a href="index.php" class="thankyou-btn">Back to Home</a>
            </div>
        </body>

        </html>
<?php
        exit;
    } catch (Exception $e) {
        echo "<script>
            document.body.innerHTML += `<div id='christmas-modal-error' style=\"
                position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:99999;
                background:rgba(0,0,0,0.32);display:flex;align-items:center;justify-content:center;\">
                <div style=\"
                    background:#fff;
                    border-radius:18px;
                    box-shadow:0 8px 32px rgba(197,26,26,0.18);
                    padding:38px 32px 32px 32px;
                    max-width:370px;
                    text-align:center;
                    position:relative;
                    border:2px solid #C51A1A;
                \">
                    <div style='margin-bottom:18px;'>
                        <img src='https://img.icons8.com/color/64/christmas-tree.png' style='width:54px;' alt='Error'/>
                    </div>
                    <h3 style='color:#C51A1A; font-size:1.5rem; margin-bottom:10px;'>Mailer Error</h3>
                    <div style='color:#1e1e1e; font-size:1.08rem; margin-bottom:18px;'>" . htmlspecialchars($mail->ErrorInfo) . "</div>
                    <button onclick=\"window.location.href='index.php'\" style=\"
                        background:#C51A1A;
                        color:#fff;
                        border:none;
                        border-radius:8px;
                        padding:10px 32px;
                        font-size:1.08rem;
                        font-weight:600;
                        cursor:pointer;
                        box-shadow:0 2px 8px rgba(197,26,26,0.08);
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