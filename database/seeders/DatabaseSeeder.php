<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac augue nisl. Phasellus non neque id arcu imperdiet pulvinar. Suspendisse odio augue, mollis a convallis non, porta sit amet nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ligula risus, rhoncus vitae magna vel, mattis porttitor mi. Maecenas rhoncus dolor leo, vel convallis orci mollis sit amet. Sed eu pharetra magna. Donec eu metus nibh. Integer aliquam risus turpis, vel vestibulum nibh vestibulum et. Morbi sit amet commodo dui, nec tristique libero. Morbi in ultrices nisl. Curabitur vitae pulvinar purus, a finibus mauris. Nulla blandit lectus lorem, a fringilla nisl cursus sit amet. Integer eget vestibulum felis. Duis quis est massa.</p> 
            <p>Mauris magna neque, placerat eu ante ut, tincidunt elementum ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum volutpat sapien vitae urna rutrum pharetra. Cras et dui urna. Fusce sed tortor a turpis aliquam finibus. Pellentesque at lectus non orci malesuada porta a accumsan ex. Vivamus sed libero condimentum, sodales velit ac, porttitor justo. Ut aliquam risus risus, nec lobortis nibh rutrum ac. Donec malesuada, justo eu facilisis euismod, mauris orci viverra urna, quis sagittis felis ligula id augue.</p>
            <p>Phasellus eleifend felis at felis placerat ullamcorper. Sed ac posuere massa, vel congue lacus. Etiam viverra quis augue in hendrerit. Pellentesque semper auctor magna eget aliquet. Nulla venenatis nunc eget bibendum convallis. Morbi porttitor leo ac ligula pellentesque luctus. Praesent non enim mauris. Praesent vel nunc eu est convallis feugiat non condimentum sapien. Nullam laoreet ex massa. Integer eu sagittis lacus, ut sagittis leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque quis purus tempor, elementum sapien ornare, ultricies ante. Nulla vel iaculis elit. Donec lobortis mollis risus eu convallis. In eu risus mi. Sed molestie bibendum massa id faucibus.</p>
            <p>Integer tincidunt massa a blandit efficitur. Maecenas elementum leo elementum ligula ornare mattis. Vivamus odio lacus, iaculis vitae purus feugiat, egestas egestas purus. Sed fermentum laoreet tincidunt. Mauris maximus egestas odio vel interdum. Fusce tincidunt ante eget enim dictum, vel placerat urna rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam aliquam purus et lectus ultricies dignissim. Quisque ut nibh facilisis, efficitur nibh sed, pellentesque turpis. Proin quam mi, gravida id ante eget, sodales feugiat lectus. Cras et metus mattis, placerat mauris non, porttitor nisi. Sed fermentum mauris eget dolor scelerisque egestas. Suspendisse vehicula, eros et lacinia pulvinar, est nisl suscipit nisl, quis suscipit nulla elit nec arcu.</p>
            <p>Duis eu mi turpis. Fusce porttitor rhoncus sem, eget sagittis neque varius id. Donec convallis varius facilisis. Morbi vitae cursus turpis. Quisque pretium hendrerit magna non rutrum. Aenean ac dui id odio consequat finibus vel sed justo. Etiam condimentum, tellus at pretium ullamcorper, erat arcu accumsan nisl, eget vehicula felis mi vitae nisl. Quisque mollis porta tortor, ut commodo ipsum gravida vel. Proin eleifend mauris enim, id commodo leo efficitur pellentesque. Pellentesque in urna id odio eleifend mattis et quis nisi. Nulla vel magna ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris sit amet ligula fringilla, mattis mi luctus, ullamcorper metus.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac augue nisl. Phasellus non neque id arcu imperdiet pulvinar. Suspendisse odio augue, mollis a convallis non, porta sit amet nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ligula risus, rhoncus vitae magna vel, mattis porttitor mi. Maecenas rhoncus dolor leo, vel convallis orci mollis sit amet. Sed eu pharetra magna. Donec eu metus nibh. Integer aliquam risus turpis, vel vestibulum nibh vestibulum et. Morbi sit amet commodo dui, nec tristique libero. Morbi in ultrices nisl. Curabitur vitae pulvinar purus, a finibus mauris. Nulla blandit lectus lorem, a fringilla nisl cursus sit amet. Integer eget vestibulum felis. Duis quis est massa.</p> 
            <p>Mauris magna neque, placerat eu ante ut, tincidunt elementum ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum volutpat sapien vitae urna rutrum pharetra. Cras et dui urna. Fusce sed tortor a turpis aliquam finibus. Pellentesque at lectus non orci malesuada porta a accumsan ex. Vivamus sed libero condimentum, sodales velit ac, porttitor justo. Ut aliquam risus risus, nec lobortis nibh rutrum ac. Donec malesuada, justo eu facilisis euismod, mauris orci viverra urna, quis sagittis felis ligula id augue.</p>
            <p>Phasellus eleifend felis at felis placerat ullamcorper. Sed ac posuere massa, vel congue lacus. Etiam viverra quis augue in hendrerit. Pellentesque semper auctor magna eget aliquet. Nulla venenatis nunc eget bibendum convallis. Morbi porttitor leo ac ligula pellentesque luctus. Praesent non enim mauris. Praesent vel nunc eu est convallis feugiat non condimentum sapien. Nullam laoreet ex massa. Integer eu sagittis lacus, ut sagittis leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque quis purus tempor, elementum sapien ornare, ultricies ante. Nulla vel iaculis elit. Donec lobortis mollis risus eu convallis. In eu risus mi. Sed molestie bibendum massa id faucibus.</p>
            <p>Integer tincidunt massa a blandit efficitur. Maecenas elementum leo elementum ligula ornare mattis. Vivamus odio lacus, iaculis vitae purus feugiat, egestas egestas purus. Sed fermentum laoreet tincidunt. Mauris maximus egestas odio vel interdum. Fusce tincidunt ante eget enim dictum, vel placerat urna rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam aliquam purus et lectus ultricies dignissim. Quisque ut nibh facilisis, efficitur nibh sed, pellentesque turpis. Proin quam mi, gravida id ante eget, sodales feugiat lectus. Cras et metus mattis, placerat mauris non, porttitor nisi. Sed fermentum mauris eget dolor scelerisque egestas. Suspendisse vehicula, eros et lacinia pulvinar, est nisl suscipit nisl, quis suscipit nulla elit nec arcu.</p>
            <p>Duis eu mi turpis. Fusce porttitor rhoncus sem, eget sagittis neque varius id. Donec convallis varius facilisis. Morbi vitae cursus turpis. Quisque pretium hendrerit magna non rutrum. Aenean ac dui id odio consequat finibus vel sed justo. Etiam condimentum, tellus at pretium ullamcorper, erat arcu accumsan nisl, eget vehicula felis mi vitae nisl. Quisque mollis porta tortor, ut commodo ipsum gravida vel. Proin eleifend mauris enim, id commodo leo efficitur pellentesque. Pellentesque in urna id odio eleifend mattis et quis nisi. Nulla vel magna ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris sit amet ligula fringilla, mattis mi luctus, ullamcorper metus.</p>'
        ]);
    }
}
