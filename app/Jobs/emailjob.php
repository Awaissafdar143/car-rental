<?php

namespace App\Jobs;

use App\Mail\markwtingmail;
use App\Models\email_template;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class emailjob implements ShouldQueue
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
        // dd($templateData);
        Mail::to($this->emaildata['email'])->send(new markwtingmail($templateData, $this->emaildata['name'], $this->subjectData));
    }
}
