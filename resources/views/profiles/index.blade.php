@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="/images/mads.jpg" class="rounded-circle" alt="" />
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>
        <a href="#">Add New Post</a>
      </div>
      <div class="d-flex">
        <div class="pr-5"><strong>153</strong> posts</div>
        <div class="pr-5"><strong>23k</strong> followers</div>
        <div class="pr-5"><strong>212</strong> following</div>
      </div>
      <div class="pt-3 font-weight-bold">
        {{ $user->profile->title }}
      </div>
      <div>
        {{ $user->profile->description }}
      </div>
      <div>
        <a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
    </div>
  </div>

  <div class="row pt-5">
    <div class="col-4">
      <img src="https://instagram.fceb2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.179.1440.1440a/s640x640/80515501_641465543275873_1335081861209396701_n.jpg?_nc_ht=instagram.fceb2-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=xiNjMcfPN5gAX-_xaZ0&oh=38b588aa931383a1af452eb7c3354e0d&oe=5ED65A25" class="w-100">
    </div>
    <div class="col-4">
      <img src="https://instagram.fceb2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.105.1440.1440a/s640x640/80825776_2522023164734355_1508556719163605979_n.jpg?_nc_ht=instagram.fceb2-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=Es5DBQT5JqkAX_RRMH0&oh=1bec0062a7f5f120a7979ab14894ecf9&oe=5EA15C5B" class="w-100">
    </div>
    <div class="col-4">
      <img src="https://instagram.fceb2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.180.1440.1440a/s640x640/80579776_217906892634297_2703045204782082406_n.jpg?_nc_ht=instagram.fceb2-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=cYTB9nmR4lwAX_NXb2K&oh=e7e8457ddad05543ef96ab6b580426c8&oe=5ED80FE6" class="w-100">
    </div>
  </div>

</div>
@endsection




