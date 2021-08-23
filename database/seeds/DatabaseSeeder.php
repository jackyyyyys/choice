<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();

        DB::table('configs')->delete();
        $this->call('ConfigTableSeeder');
        //done

        DB::table('groups')->delete();
        $this->call('GroupTableSeeder');
        //done

        DB::table('task_completion_choices')->delete();
        $this->call('TaskCompletionChoicesTableSeeder');
        //done

        DB::table('task_completion_types')->delete();
        $this->call('TaskCompletionTypesTableSeeder');
        //done

        DB::table('task_success_choices')->delete();
        $this->call('TaskSuccessChoiceTableSeeder');
        //done

        DB::table('task_failure_choices')->delete();
        $this->call('TaskFailureChoiceTableSeeder');
        //done

        DB::table('hostage_save_choices')->delete();
        $this->call('HostageSaveChoiceTableSeeder');
        //done

        DB::table('hostage_replacement_choices')->delete();
        $this->call('HostageReplacementChoiceTableSeeder');
        //done

        DB::table('stations')->delete();
        $this->call('StationTableSeeder');
        //done

        DB::table('task_categories')->delete();
        $this->call('TaskCategoryTableSeeder');
        //done

        DB::table('tasks')->delete();
        $this->call('TaskTableSeeder');
        //done

        DB::table('task_sequences')->delete();
        $this->call('TaskSequenceTableSeeder');

        Model::reguard();
    }
}
