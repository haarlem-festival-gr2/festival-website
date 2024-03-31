<?php

namespace Service;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailService {
    const TYPE_TICKET = 'ticket';
    const TYPE_INVOICE = 'invoice';

    public function sendEmail($type, string $attachment, string $email, string $name): void
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'haarlem.festival.2024.2024@gmail.com';
            $mail->Password = 'zxjw qmlr qaig inmf';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('haarlem.festival.2024.2024@gmail.com', 'Haarlem Festival');

            $mail->isHTML(true);

            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            //$mail->SMTPDebug = 3;

            switch ($type) {
                case self::TYPE_TICKET:
                    $this->configureTicketEmail($mail, $attachment, $email, $name);
                    break;
                case self::TYPE_INVOICE:
                    $this->configureInvoiceEmail($mail, $attachment, $email, $name);
                    break;
                default:
                    throw new Exception("Invalid email type");
            }
            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    protected function configureTicketEmail($mail, $attachment, string $email, string $name): void
    {
        $mail->addAddress($email, $name);

        $mail->Subject = 'Your Ticket(s) for Haarlem Festival';
        $mail->Body = 'Thank you for your purchase. Please find your ticket(s) attached.';
        $mail->AltBody = 'Thank you for your purchase. Please find your ticket(s) attached.';

        $mail->addStringAttachment($attachment, 'tickets.pdf');
    }

    protected function configureInvoiceEmail($mail, $attachment, string $email, string $name): void
    {
        $mail->addAddress($email, $name);

        $mail->Subject = 'Payment for Haarlem Festival Tickets';
        $mail->Body = 'Thank you for your purchase. Please find your invoice attached.';
        $mail->AltBody = 'Thank you for your purchase. Please find your invoice attached.';

        $mail->addStringAttachment($attachment, 'invoice.pdf');
    }
}
