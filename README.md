# Pronamic SendGrid HTML to plain text

## Requirements

```php
// send HTML content
if ( 'text/plain' !== $content_type ) {
	$mail->setHtml( Sendgrid_Tools::remove_all_tag_urls( $message ) );
}
```

Adjust to:

```php
if ( 'text/plain' !== $content_type ) {
	$mail->setText( apply_filters( 'pronamic_sendgrid_text_message', $message ) );
	$mail->setHtml( Sendgrid_Tools::remove_all_tag_urls( $message ) );
}
```

Source: https://github.com/sendgrid/wordpress/blob/master/lib/sendgrid/sendgrid-wp-mail.php#L307-L310

## Links

*	https://github.com/soundasleep/html2text
*	https://github.com/mtibben/html2text
