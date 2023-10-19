<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Edly Mulya Andeslin',
            'username' => 'edlymulyaandeslin',
            'email' => 'edlymulyaandeslin@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Copy Writer',
            'slug' => 'copy-writer',
        ]);

        Blog::factory(40)->create();
        // Blog::create([
        //     'title' => 'Blog Pertama',
        //     'slug' => 'blog-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque, impedit temporibus! Voluptate perferendis dolores saepe iste at omnis sapiente ipsum culpa unde corrupti perspiciatis quia, incidunt similique optio esse laborum alias, impedit recusandae earum eaque totam consectetur! Illo labore cupiditate, modi inventore libero nostrum magnam earum accusantium veniam laborum! Eveniet nam repellat aut, suscipit perspiciatis molestias sed placeat. Dolore libero, adipisci repudiandae neque dolorum ex voluptatibus reprehenderit doloremque accusantium quo voluptates minus, doloribus in rerum quod nesciunt ipsa earum aperiam tempora recusandae porro quidem sed? Sed, nemo. Dicta, dolore laboriosam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Blog::create([
        //     'title' => 'Blog Kedua',
        //     'slug' => 'blog-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque,',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque, impedit temporibus! Voluptate perferendis dolores saepe iste at omnis sapiente ipsum culpa unde corrupti perspiciatis quia, incidunt similique optio esse laborum alias, impedit recusandae earum eaque totam consectetur! Illo labore cupiditate, modi inventore libero nostrum magnam earum accusantium veniam</p><p> laborum! Eveniet nam repellat aut, suscipit perspiciatis molestias sed placeat. Dolore libero, adipisci repudiandae neque dolorum ex voluptatibus reprehenderit doloremque accusantium quo voluptates minus, doloribus in rerum quod nesciunt ipsa earum aperiam tempora recusandae porro quidem sed? Sed, nemo. Dicta, dolore laboriosam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Blog::create([
        //     'title' => 'Blog Ketiga',
        //     'slug' => 'blog-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque,',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque, impedit temporibus! Voluptate perferendis dolores saepe iste at omnis sapiente ipsum culpa unde corrupti perspiciatis quia, incidunt similique optio esse laborum alias, impedit recusandae earum eaque totam consectetur! Illo labore cupiditate, modi inventore libero nostrum magnam earum accusantium veniam</p><p> laborum! Eveniet nam repellat aut, suscipit perspiciatis molestias sed placeat. Dolore libero, adipisci repudiandae neque dolorum ex voluptatibus reprehenderit doloremque accusantium quo voluptates minus, doloribus in rerum quod nesciunt ipsa earum aperiam tempora recusandae porro quidem sed? Sed, nemo. Dicta, dolore laboriosam.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Blog::create([
        //     'title' => 'Blog Keempat',
        //     'slug' => 'blog-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque,',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nemo inventore porro quis consequuntur tenetur, aspernatur perferendis omnis doloremque, impedit temporibus! Voluptate perferendis dolores saepe iste at omnis sapiente ipsum culpa unde corrupti perspiciatis quia, incidunt similique optio esse laborum alias, impedit recusandae earum eaque totam consectetur! Illo labore cupiditate, modi inventore libero nostrum magnam earum accusantium veniam</p><p> laborum! Eveniet nam repellat aut, suscipit perspiciatis molestias sed placeat. Dolore libero, adipisci repudiandae neque dolorum ex voluptatibus reprehenderit doloremque accusantium quo voluptates minus, doloribus in rerum quod nesciunt ipsa earum aperiam tempora recusandae porro quidem sed? Sed, nemo. Dicta, dolore laboriosam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
