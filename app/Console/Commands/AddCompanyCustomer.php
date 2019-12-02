<?php

namespace App\Console\Commands;
use App\Company;
use Illuminate\Console\Command;

class AddCompanyCustomer extends Command
{
protected $signature = 'contact:company';
    protected $description = ' Add new company';

   
    public function handle()
    {
        $name = $this->ask("What is the company name ? ");
        $phone = $this->ask("What is the company phone number ? ");

        if($this->confirm('Are you ready to insert "' . $name .'"?')){
            $company = Company::create([
                'name' => $name,
                'phone' =>$phone
            ]);
            return   $this->info('Added : ' . $company->name);
        };      

        $this->warn('NOT added');
      

    }
}
