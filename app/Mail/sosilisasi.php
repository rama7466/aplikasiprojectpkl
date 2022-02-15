<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Sosial;
use app\Models\Tbl_crupp;
use Illuminate\Support\Facades\Storage;

class sosilisasi extends Mailable
{
    use Queueable, SerializesModels;

    public $sosiali,$tblcrupp;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Sosial $sosiali,Tbl_crupp $tblcrupp)
    {
        $this->Sosial = $sosiali;
        $this->Tbl_crupp = $tblcrupp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $file = Storage::path($this->Sosial->myfile);


        return $this->from('ramaramdhani7466@gmail.com')
                    ->markdown('sosial.send')
                    ->with([
                        'no_upp'          => $this->Tbl_crupp->no_upp,
                    ])
                    ->attach($file);
    }
}
