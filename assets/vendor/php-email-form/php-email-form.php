<?php

class PHP_Email_Form
{
    public $ajax = false;
    public $to = '';
    public $from_name = '';
    public $from_email = '';
    public $subject = '';
    public $messages = [];
    public $error = '';

    public function add_message($value, $key, $max_length = 0)
    {
        if ($max_length && strlen($value) > $max_length) {
            $this->error = "The $key is too long.";
            return false;
        }
        $this->messages[$key] = $value;
        return true;
    }

    public function send()
    {
        // Header untuk email
        $headers = "From: {$this->from_name} <{$this->from_email}>\r\n";
        $headers .= "Reply-To: {$this->from_email}\r\n";
        
        // Mengirim email
        if (mail($this->to, $this->subject, $this->build_message(), $headers)) {
            return true;
        } else {
            $this->error = 'Mail sending failed.';
            return false;
        }
    }

    private function build_message()
    {
        $message = "You have received a new message:\n\n";
        foreach ($this->messages as $key => $value) {
            $message .= ucfirst($key) . ": $value\n";
        }
        return $message;
    }
}
?>
