<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

        $this->call('defaultCategories');
        $this->command->info('default Categories created :) !');

        $this->call('defaultUsers');
        $this->command->info('default users created :) !');

        $this->call('defaultimages');
        $this->command->info('default images created :) !');

        $this->call('defaultVideosSites');
        $this->command->info('default Videos Sites created :) !');

        $this->call('defaultVideos');
        $this->command->info('default videos created :) !');


	}

}

class defaultCategories extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('categories')->delete();
        // tabloya girilecek veriler
        DB::table('categories')->insert(array(
            array(
                'name'=>'Genel',
                'description'=>'açıklama metni',
                'created_at'=>date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Hareketli Resimler',
                'description'=>'açıklama metni',
                'created_at'=>date('Y-m-d H:i:s')
            )
        ));

    }

}

class defaultUsers extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('users')->delete();
        // tabloya girilecek veriler
        DB::table('users')->insert(array(
            array(
                'firstname'=>'yusuf',
                'lastname'=>'demir',
                'email'=>'4yusufdemir@gmail.com',
                'password'=>Hash::make('asdasd'),
                'created_at'=>date('Y-m-d H:i:s')
            ),
            array(
                'firstname'=>'yusuf1',
                'lastname'=>'demir',
                'email'=>'ysfdmr@gmail.com',
                'password'=>Hash::make('asdasd'),
                'created_at'=>date('Y-m-d H:i:s')
            )
        ));

    }

}

class defaultimages extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('images')->delete();
        // tabloya girilecek veriler
        DB::table('images')->insert(array(
            array(
                'name'=>'Bahattinden Sabit Resim :)',
                'description'=>'açıklama metni',
                'src'=>'http://aykutaksu.com/wp-content/uploads/2013/11/baaddin-karikatur2.jpg',
                'type'=>0,
                'user_id'=>1,
                'cat_id'=>1,
                'created_at'=>date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Hareketli Resim :)',
                'description'=>'açıklama metni test-- bu resim bir giftir',
                'src'=>'http://www.thisiscolossal.com/wp-content/uploads/2013/01/3.gif',
                'type'=>1,//gif :)
                'user_id'=>1,
                'cat_id'=>1,
                'created_at'=>date('Y-m-d H:i:s')
            )
        ));

    }
}



class defaultVideosSites extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('video_sites')->delete();
        // tabloya girilecek veriler
        DB::table('video_sites')->insert(array(
            array(
                'name'=>'YOUTUBE',
                'description'=>'Twitter Videoları',
                'link'=>'https://www.youtube.com/',
                'created_at'=>date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'VİNE',
                'description'=>'Vine Videoları',
                'link'=>'https://www.vine.com/',
                'created_at'=>date('Y-m-d H:i:s')
            )
        ));

    }

}




class defaultVideos extends Seeder{

    public function run(){
        // Tabloyu Temizler
        DB::table('videos')->delete();
        // tabloya girilecek veriler
        DB::table('videos')->insert(array(
            array(
                'name'=>'Test Video 1 :)',
                'description'=>'açıklama metni 1',
                'src'=>'https://www.youtube.com/watch?v=0NKUpo_xKyQ',
                'thumbnail_src'=>'https://i1.ytimg.com/vi/0NKUpo_xKyQ/default.jpg',
                'video_site_id'=>1,//youtube :)
                'user_id'=>1,
                'cat_id'=>1,
                'created_at'=>date('Y-m-d H:i:s')
            ),
            array(
                'name'=>'Test Video 2 :)',
                'description'=>'açıklama metni 2',
                'src'=>'https://www.youtube.com/watch?v=RbtPXFlZlHg',
                'thumbnail_src'=>'https://i1.ytimg.com/vi/RbtPXFlZlHg/default.jpg',
                'video_site_id'=>1,//youtube :)
                'user_id'=>1,
                'cat_id'=>1,
                'created_at'=>date('Y-m-d H:i:s')
            )
        ));

    }

}

