<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /** @var Collection<User> $users */
        $users = User::factory(5)->create();
        $users->each(function (User $user) {
            $user->topics()->saveMany(Topic::factory(5)->make());
        });
        Topic::factory(5)->make()->each(function (Topic $topic) use ($users) {
            $users->random(1)->each(function (User $user) use ($topic) {
                $user->topics()->save($topic);
                $user->posts()->saveMany(Post::factory(5)->make(['topic_id' => $topic->id]));
            });
        });
    }
}
