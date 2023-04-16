<?php

namespace App\Mail;

use App\Models\UnitIntrest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UnitInterestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var \App\Models\UnitIntrest
     */
    protected $unitInterest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(UnitIntrest $unitInterest)
    {
        $this->unitInterest = $unitInterest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.unit-interest')
            ->with([
                'data' => $this->unitInterest
            ]);
    }
}
