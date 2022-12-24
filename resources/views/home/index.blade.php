@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <div style="display: block">
            <img class="rounded mx-auto d-block" src="{!! url('images/logo.png') !!}" alt="" width="50%" >
        </div>
            @role('user')
                <h1>Dashboard</h1>
                <p class="lead">Hello <b>{{ auth()->user()->name }}</b>, Salam Olahraga!!!</p>
                <p class="lead">Selamat datang di HHZ Arena. Di Website ini kalian bisa memesan dan menyewa berbagai fasilitas olahraga dan lainnya yang berstandar internasional.</p>
            @endrole

            @role('admin')
                <p class="lead">Hello Admin <b>{{ auth()->user()->name }}</b>, Selamat Bekerja!!!</p>
                <p class="lead">Utamakan Kesehatan. Hindari overwork!!<br><br></p>
                <p class="lead" style="text-align:center"><b>Visi :</b> <br>  <b>"Menjadi salah satu kawasan olahraga terintegrasi yang modern serta ramah lingkungan dan unggul berstandar Internasional"</b></p>
                <p class="lead" style="text-align:center"><b>Misi :</b> <br>  • Mengoptimalkan seluruh sumber daya yang ada pada HHZ Arena demi menunjang terselenggaranya pelayanan yang prima dan pengelolaan yang profesional sesuai dengan SOP yang berlaku; <br>
                                                    • Melestarikan lingkungan HHZ Arena area hijau di tengah kota Miramar, sebagai ruang terbuka hijau, dan sebagai objek wisata dan prasarana komunikasi sosial;<br>
                                                    • Memaksimalkan pemanfaatan serta pengembangan sseluruh potensi HHZ Arena yang bersifat strategis, umum dan rutin nutuk meningkatkan pendapatan dalam rangka menciptakan kemandirian ekonomi.</p>
            @endrole
            
            @role('management')
                <p class="lead">Hello Manager <b>{{ auth()->user()->name }}</b>, Selamat Bekerja!!!</p>
                <p class="lead">Utamakan kesehatan. Hindari Overwork!!! <br><br> </p>
                <p class="lead" style="text-align:center"><b>Visi :</b> <br> <b>"Menjadi salah satu kawasan olahraga terintegrasi yang modern serta ramah lingkungan dan unggul berstandar Internasional"</b></p>
                <p class="lead" style="text-align:center"><b>Misi :</b> <br>  • Mengoptimalkan seluruh sumber daya yang ada pada HHZ Arena demi menunjang terselenggaranya pelayanan yang prima dan pengelolaan yang profesional sesuai dengan SOP yang berlaku; <br>
                                                    • Melestarikan lingkungan HHZ Arena area hijau di tengah kota Miramar, sebagai ruang terbuka hijau, dan sebagai objek wisata dan prasarana komunikasi sosial;<br>
                                                    • Memaksimalkan pemanfaatan serta pengembangan sseluruh potensi HHZ Arena yang bersifat strategis, umum dan rutin nutuk meningkatkan pendapatan dalam rangka menciptakan kemandirian ekonomi.</p>
            @endrole
            
            @endauth

        @guest
        <h1>HHZ Arena</h1>
        <p class="lead">Selamat datang di Website resmi HHZ Arena </p>
        <p class="lead">HHZ Arena adalah merupakan Arena Olahraga yang menyediakan beberapa lapangan olahraga dan acara berstandar internasional yang berlokasi di Pecado pusat kota Miramar. HHZ Arena dibangun pada tahun 2020 diatas tanah seluas 20 hektar.  HHZ Arena dibangun untuk memenuhi kebutuhan masyarakat untuk berolahraga. </p>
        
        <p class="lead"><b>Our Social Media</b> <br> Instagram : @hhz.arenaindo <br> Twitter   : @hhzarena.id</p>
        @endguest
    </div>
@endsection
