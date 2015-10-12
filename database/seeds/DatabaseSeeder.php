<?php
use app\User;
use app\Tempatmakan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeds finished.');

        Model::reguard();
    }
}
class UserTableSeeder extends Seeder 
{
    public function run(){
        //clear database
        DB::table('user')->delete();

        //seeding database
        $userOne = DB::table('user')->insert([
            'uname'     => 'admin',
            'name'      => 'Dayan Ramly Ramadhan',
            'password'  => bcrypt('admin'),
            'group_id'  => 1
            ]);        
        $userTwo = DB::table('user')->insert([
            'uname'     => 'user',
            'name'      => 'User dua',
            'password'  => bcrypt('user'),
            'group_id'  => 2
            ]);
        $this->command->info('User seeding complete');
    }
}