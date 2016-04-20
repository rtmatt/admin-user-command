<?php

namespace RTMatt\AdminUserCommand;

use Illuminate\Console\Command;

class AdminUserMake extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminuser:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates an Admin User';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('What is the user\'s name?');
        $email = $this->ask('What is the user\'s email address?');
        $permission_level = $this->ask('What is the user\'s permission level?');
        $original_password = str_random(8);
        $password = \Hash::make($original_password);
        $args = compact('name','email','password','permission_level');
        if ($this->confirm("Making User {$name}<{$email}>.  Continue? [y|N]")) {
            \App\User::create($args);
            $this->info("User {$name}<{$email}> created with password:{$original_password}");
            $this->info("Done");
            return;
        }

        $this->info('Canceled.');
        return;

    }
}
