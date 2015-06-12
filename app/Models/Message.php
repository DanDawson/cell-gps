<?php

class Message extends Eloquent {

	protected $touches = array('phone');

    public function send()
    {
        // Send SMS with token using Twilio
        // 
        // env('APP_DEBUG', false),
        // 
        // 
        $twilio = new Services_Twilio(env('TWILIO_ACCOUNT_SID', ''), env('TWILIO_AUTH_TOKEN', ''));
        $sms = $twilio->account->messages->sendMessage(
          env('TWILIO_NUMBER', ''), 
          $this->phone->number,
          $this->message
        );
        // Update timestamp
        $this->touch();
    }

	public function phone() {
		return $this->belongsTo('Phone');
	}

}