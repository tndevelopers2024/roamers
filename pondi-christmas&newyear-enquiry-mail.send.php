<?php
session_start();

if (isset($_POST['submit'])) {
    $date = date('Y-m-d H:i:s');
    $post_data = [
        'name'        => $_POST['name'] ?? '',
        'email'       => $_POST['email'] ?? '',
        'phone'       => $_POST['phone'] ?? '',
        'destination' => $_POST['destination'] ?? '',
        'pax'         => $_POST['pax'] ?? '',
        'trip_type'   => $_POST['trip_type'] ?? '',
        'month'       => $_POST['month'] ?? '',
        'message'     => $_POST['message'] ?? ''
    ];

    $google_webhook_url = 'https://script.google.com/macros/s/AKfycby3nEnw8ya-450Fm_y_Ynx77TgNPse_g7FaaQyH5dhMZv5-Cf5dQUoLJqb1T7EQ9Ztbpg/exec';

    $local_file = 'enquiries_local_copy.csv';
    $is_new = !file_exists($local_file) || filesize($local_file) == 0;
    $fp = fopen($local_file, 'a');
    if ($fp) {
        if ($is_new) {
            fputcsv($fp, ['Date', 'Name', 'Email', 'Phone', 'Destination', 'Pax', 'Trip Type', 'Month', 'Message']);
        }
        fputcsv($fp, array_merge([$date], array_values($post_data)));
        fclose($fp);
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $google_webhook_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'RoamersWebsite/1.0');
    $result = curl_exec($ch);
    curl_close($ch);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Received - Roamers</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { background-color: #f8fbff; font-family: 'Plus Jakarta Sans', sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; background-image: radial-gradient(at 0% 0%, rgba(78, 192, 219, 0.1) 0px, transparent 50%); }
        .thankyou-card { background: white; padding: 60px 40px; border-radius: 40px; box-shadow: 0 40px 80px rgba(9, 64, 103, 0.1); text-align: center; max-width: 500px; width: 90%; }
        .icon { width: 90px; height: 90px; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 45px; margin: 0 auto 30px; background: linear-gradient(135deg, #4ec0db 0%, #094067 100%); }
        h1 { color: #094067; margin-bottom: 20px; font-size: 32px; font-weight: 800; font-family: 'Outfit', sans-serif; }
        p { color: #5f6c7b; margin-bottom: 40px; line-height: 1.8; font-size: 17px; }
        .btn { display: inline-block; background: #094067; color: white; padding: 18px 45px; border-radius: 50px; text-decoration: none; font-weight: 700; transition: all 0.3s; text-transform: uppercase; letter-spacing: 1px; }
        .btn:hover { background: #4ec0db; transform: translateY(-3px); }
    </style>
</head>
<body>
    <div class="thankyou-card">
        <div class="icon">&#10003;</div>
        <h1>All Set!</h1>
        <p>Thanks <strong><?php echo htmlspecialchars($post_data['name']); ?></strong>! Your Christmas &amp; New Year enquiry has been received. Our team will contact you shortly.</p>
        <a href="index.php" class="btn">Return Home</a>
    </div>
</body>
</html>
    <?php
} else {
    header("Location: pondi-christmas&newyear-enquiry-form.php");
    exit();
}
?>