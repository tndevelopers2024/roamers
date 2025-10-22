# Dynamic Event Mailer Usage Guide

This guide explains how to use the dynamic event mailer implemented in `events-send-mail.php`. This script uses PHPMailer to send styled booking confirmation emails for different events.

---

## 1. **How It Works**

- Receives booking data via a POST request from your event registration form.
- Looks up event details from the `$events` array using the `event_type` field.
- Sends a styled HTML email with all booking details to the admin email (`info@roamers.in`).
- Shows a confirmation or error message to the user.

---

## 2. **Required Form Fields**

Your booking form should send the following fields via POST:

- `full_name` (string) — User's full name (required)
- `phone_number` (string) — User's phone number (required)
- `dob` (string) — Date of birth (required)
- `selected_quantity` (int) — Number of tickets/passes (optional, defaults to 1)
- `selected_package` (string) — Pass/package type (optional, defaults to `standard-pass`)
- `calculated_base_price` (float) — Price per unit (optional)
- `calculated_tax` (float) — Tax amount (optional)
- `calculated_total` (float) — Total price (optional)
- `event_type` (string) — Key for the event in the `$events` array (required for event-specific details)

---

## 3. **Adding or Editing Events**

To add a new event or edit existing ones, update the `$events` array in `events-send-mail.php`:

```php
// ...existing code...
'my-event-key' => [
    'name' => 'Event Name',
    'subject' => 'Email Subject',
    'from_name' => 'Sender Name',
    'date' => 'Event Date',
    'day' => 'Day of Week',
    'time' => 'Event Time',
    'location' => 'Event Location'
],
// ...existing code...
```

- The `event_type` field in your form should match the key (e.g., `my-event-key`).

---

## 4. **Email Sending**

- The script uses Gmail SMTP (`smtp.gmail.com`) to send emails.
- Admin email: `info@roamers.in`
- Update SMTP credentials in the script if needed.

---

## 5. **Dependencies**

- [PHPMailer](https://github.com/PHPMailer/PHPMailer) must be present in `PHPMailer/src/`.
- PHP 7+ recommended.

---

## 6. **Security Notes**

- Do not expose SMTP credentials in public repositories.
- The script does basic sanitization; always validate input on the client side as well.

---

## 7. **Troubleshooting**

- If emails are not sent:
  - Check SMTP credentials and Gmail settings.
  - Ensure your server allows outbound connections on port 587.
  - Review error messages for more details.

---

## 8. **Testing**

- Submit the form with valid data.
- Check the admin inbox for the booking email.
- The user should see a confirmation or error message on the site.

---

**Tip:**  
You can reuse this script for any event by updating the `$events` array and ensuring your form sends the correct `event_type`.
