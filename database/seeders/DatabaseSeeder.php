<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

      $this->call(PermissionsSeeder::class);
      $this->call(CategorySeeder::class);
      $this->call(TypeSeeder::class);
      $this->call(CourseSeeder::class);
      $this->call(TopicSeeder::class);
      $this->call(ScheduleSeeder::class);
      $this->call(AssistantSeeder::class);
      $this->call(RegistrySeeder::class);
         $this->call(RegistryDetailSeeder::class);
            $this->call(CertificationSeeder::class);
                   $this->call(ExamSeeder::class);
    }
}