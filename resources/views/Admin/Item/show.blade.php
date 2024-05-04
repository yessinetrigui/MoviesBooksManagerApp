@extends('Admin.Layouts.app')
@section("title")
Item Manager
@endsection
@section("content")
 <div class="flex flex-col ">
    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$Item->id }}  </span> </h2>
        <h2 class="font-pop text-lg">title: <span class="font-semibold"> {{$Item->title}} </span>   </h2>
        <h2 class="font-pop text-lg">author: <span class="font-semibold"> {{$Item->author}} </span>   </h2>
        <h2 class="font-pop text-lg">director: <span class="font-semibold"> {{$Item->director}} </span>   </h2>
        <h2 class="font-pop text-lg">genre: <span class="font-semibold"> {{$Item->genre}} </span>   </h2>
        <h2 class="font-pop text-lg">publication_year	: <span class="font-semibold"> {{$Item->publication_year}} </span>   </h2>
        <h2 class="font-pop text-lg">release_year	: <span class="font-semibold"> {{$Item->release_year}} </span>   </h2>
        <h2 class="font-pop text-lg">item_type: <span class="font-semibold"> {{$Item->item_type}} </span>   </h2>
        <div class="flex justify-around">
            <img class="w-80 h-auto object-cover" src="{{ URL::to('./SiteImages/Items/' . auth()->user()->id ."/". $Item->pic ) }}" alt="pic 1">
        </div>


</div>



<script>



</script>
<div class="flex max-sm:flex-">

</div>


<div class="my-6 flex lg:flex-row md:flex-row sm:flex-col max-sm:flex-col">


<a href="{{route('admin.Item.manage.showUpdate', ['id'=>$Item->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.Item.manage.showDelete', ['id'=>$Item->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
