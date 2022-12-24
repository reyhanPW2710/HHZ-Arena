<?php

namespace Database\Seeders;

use App\Models\Facility;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Membuat list permission untuk tiap role
        $admin_perms = [
            'users.index',
            'users.create',
            'users.store',
            'users.show',
            'users.edit',
            'users.update',
            'users.destroy',
            'facilities.index',
            'facilities.create',
            'facilities.store',
            'facilities.edit',
            'facilities.update',
            'facilities.destroy',
            'images.destroy',
            'requests.index',
            'requests.destroy',
            'logout.perform'
        ];
        $management_perms = [
            'facilities.index',
            'facilities.create',
            'facilities.store',
            'facilities.edit',
            'facilities.update',
            'facilities.destroy',
            'imagess.destroy',
            'requests.index',
            'requests.approve',
            'requests.reject',
            'logout.perform'
        ];
        $user_perms = [
            'facilities.list',
            'facilities.detail',
            'requests.create',
            'requests.store',
            'requests.list',
            'logout.perform'
        ];
        // Membuat role
        $admin = Role::create(['name' => 'admin']);
        $management = Role::create(['name' => 'management']);
        $user = Role::create(['name' => 'user']);
        // Menambahkan permission ke role
        foreach ($admin_perms as $perm) {
            $permission = Permission::where('name', $perm)->first();

            if (is_null($permission)) {
                $permission = Permission::create(['name' => $perm]);
            }
            $admin->givePermissionTo($permission);
        }
        foreach ($management_perms as $perm) {
            $permission = Permission::where('name', $perm)->first();

            if (is_null($permission)) {
                $permission = Permission::create(['name' => $perm]);
            }
            $management->givePermissionTo($permission);
        }
        foreach ($user_perms as $perm) {
            $permission = Permission::where('name', $perm)->first();

            if (is_null($permission)) {
                $permission = Permission::create(['name' => $perm]);
            }
            $user->givePermissionTo($permission);
        }
        // Membuat user admin dan menambahan role admin
        $user1 = User::create([
            'name' => 'Hydra',
            'email' => 'hhz@admin.com',
            'password' => 'admin123',
        ]);
        $user1->assignRole([$admin->id]);
        // Membuat user management dan menambahan role management
        $user2 = User::create([
            'name' => 'Groovy',
            'email' => 'hhz@mng.com',
            'password' => 'manager123',
        ]);
        $user2->assignRole([$management->id]);
        // Membuat user dan menambahan role user
        $users = [
            ['name' => 'Alvin Octavianus', 'email' => 'alvin@gmail.com', 'password' => 'useralvin1'],
            ['name' => 'Reyhan Wijaya', 'email' => 'reyhan@gmail.com', 'password' => 'userpewe1'],
            ['name' => 'Adrian Cahyadi', 'email' => 'adrian@gmail.com', 'password' => 'useradrian1'],
            ['name' => 'Necoles Fong', 'email' => 'necoles@gmail.com', 'password' => 'usernecoles1']
        ];
        foreach ($users as $userdata) {
            $user3 = User::create($userdata);
            $user3->assignRole([$user->id]);
        }
        // Menambahkan fasilitas
        $facilities = [
            [
                'name' => 'Lapangan Basket',
                'description' => 'Lapangan Basket indoor di HHZ Arena merupakan lapangan basket indoor yang terletak di bagian  timur kawasan HHZ Arena.
                Ukuran : 28 meter x 15 meter.
                Fasilitas lainnya: 2 Ruang Ganti, Toilet, Mushola, dan AC',
                'price' => 500000,
                'images' => ['basket1.jpeg', 'basket2.jpeg']
            ],
            [
                'name' => 'Lapangan Tennis',
                'description' => 'Lapangan Tennis Outdoor HHZ Arena terletak di sebelah Lapangan Basket. Tata ruang lapangan tenis sudah menggunakan standar internasional (23,77 m x 10,97 m).',
                'price' => 600000,
                'images' => ['tenis1.png', 'tenis2.png', 'tenis3.png']
            ],
            [
                'name' => 'Lapangan Futsal',
                'description' => 'Lapangan Futsal Indoor HHZ Arena terletak pada gedung Alvin di area barat kawasan HHZ Arena. Lapangan Futsal ini berenis lantai Vinyl yang memiliki tiga lapisan, yaitu compact layer, glass fiber, dan printing layer dengan ketebalan 6mm. Lapangan futsal ini berstandar internasional dan memiliki kapasitas penonton sampai 1000 orang.',
                'price' => 500000,
                'images' => ['futsal.jpg']
            ],
            [
                'name' => 'Lapangan Sepakbola',
                'description' => 'Lapangan Sepak Bola HHZ Arena merupakan salah satu Lapangan Sepakbola yang menggunakan ukuran standar internasional untuk sepak bola . Jenis rumput yang digunakan untuk lapangan ini adalah rumput alam bernama Zoysia japonica, rumput alam terbaik berstandar internasional.
                Ukuran : 100 x 68 meter
                Fasilitas : mushola, ruang ganti pemain, dan toilet. Lapangan ini juga dilengkapi dengan tribun top-down.',
                'price' => 300000,
                'images' => ['sepakbola1.png', 'sepakbola2.png']
            ],
            [
                'name' => 'Lapangan Badminton',
                'description' => 'Lapangan Badminton HHZ Arena merupakan lapangan badminton indoor yang berstandar internasional dengan ukurannya juga yang mengikuti standar internasional dengan ukuran arena 25 x 50 m. Lapangan ini dilengkapi dengan sound system dan fasilitas pendukung lainnya. Lapangan badminton HHZ Arena yang berjumlah 4 lapangan juga dilengkapi tribun yang mengelilingi ketiga lapangan tersebut dengan 5000 kursi yang siap menjadi tempat penyelenggaraan event berskala nasional maupun internasional.',
                'price' => 500000,
                'images' => ['badminton.jpeg']
            ],
            [
                'name' => 'Ballroom',
                'description' => 'Selain arena olahraga yang fantastik, HHZ Arena juga memiliki ballroom megah yang berada di Gedung Pewe. Ballroom ini dapat digunakan untuk berbagai macam event, seperti pernikahan, gathering, dan lainnya. HHZ Arena ballroom dapat menampung hingga 5000 orang.',
                'price' => 100000000,
                'images' => ['ballroom.jpeg', 'ballroom.jpg']
            ],
            [
                'name' => 'Lapangan Softball',
                'description' => 'Lapangan Softball di HHZ Arena merupakan lapangan softball terbesar dan terbaru di Indonesia yang sudah menggunakan standar internasional. Jenis rumput yang digunakan untuk lapangan baseball adalah rumput alam bernama Zoysia japonica, rumput alam terbaik bertaraf internasional.
                Ukuran :16,76 -18,29 m
                Fasilitas :Lapangan ini dilengkapi dengan tribun, ruang ganti, toilet dan mushola.',
                'price' => 500000,
                'images' => ['softball1.jpeg', 'softball2.jpeg', 'softball3.jpeg']
            ]
        ];
        foreach ($facilities as $facility) {
            $f = Facility::create([
                'name' => $facility['name'],
                'description' => $facility['description'],
                'price' => $facility['price'],
            ]);
            foreach ($facility['images'] as $image ) {
                Image::create([
                    'facility_id' => $f->id,
                    'image' => $image
                ]);
            }
        }
    }
}
