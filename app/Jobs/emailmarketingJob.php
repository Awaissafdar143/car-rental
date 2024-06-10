<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\emailmarketingmail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\email_template;

class emailmarketingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $emaildata, $templateid, $subjectData, $user_name;
    /**
     * Create a new job instance.
     */
    public function __construct($emaildata, $id, $subjectData)
    {
        $this->subjectData = $subjectData;
        $this->emaildata = $emaildata;
        // $this->$user_name = $user_name;
        $this->templateid = $id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $templateData = email_template::find($this->templateid);
<<<<<<< Updated upstream:app/Jobs/emailmarketingJob.php
        // dd($this->user_name);
        Mail::to($this->emaildata['email'])->send(new emailmarketingmail($templateData, $this->emaildata['name'], $this->subjectData));
=======
       Mail::to($this->emaildata['email'])->queue(new markwtingmail($templateData, $this->emaildata['name'], $this->subjectData));
>>>>>>> Stashed changes:app/Jobs/emailjob.php
    }
}
