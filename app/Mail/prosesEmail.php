<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Payment;
use app\Models\Tbl_crupp;
use Illuminate\Support\Facades\Storage;
class prosesEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $payment,$Crupp;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Payment $payment,Tbl_crupp $Tbl_crupp)
    {
        $this->payment = $payment;
        $this->Tbl_crupp = $Tbl_crupp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $file = Storage::path($this->payment->photo);


        return $this->from('ramaramdhani7466@gmail.com')
                    ->markdown('emails.payment')
                    ->with([
                        'no_upp'          => $this->Tbl_crupp->no_upp,
                    ])
                    ->attach($file);
    }
}
