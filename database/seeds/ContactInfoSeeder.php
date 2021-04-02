<?php

use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact_info = [
            [
                'name' => 'Asif Ahmed',
                'email' => 'asifahmed.mist@gmail.com',
                'message' => 'I like this store site',
                'contact_number' => '123456789',
            ],
            [
                'name' => 'Arshan Ahmad',
                'email' => 'aahmad@gmail.com',
                'message' => 'Need to entry more productd',
                'contact_number' => '987456321',
            ],
        ];

        foreach ($contact_info as $key => $value) {
            DB::table('contact_infos')->insert([
                $key => $value
            ]); 
        }
    }
}
