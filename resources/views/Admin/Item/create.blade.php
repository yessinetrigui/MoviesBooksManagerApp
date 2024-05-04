@extends('Admin.Layouts.app')
@section("title")
Item Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif

                    </div>
@if ($Item==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.Item.manage.doAdd')}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.Item.manage.doUpdate', ['id'=>$Item->id])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-white0  text-dark">Item title</label>
        @if ($Item==null)
        <input  type="text" name="title" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Write The Name Of Item here" required="">
        @else
        <input value="{{$Item->title}}" type="text" name="title" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-white0  text-dark">Item author</label>
        @if ($Item==null)
        <input  type="text" name="author" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input value="{{$Item->author}}" type="text" name="author" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-white0  text-dark">Item director</label>
        @if ($Item==null)
        <input  type="text" name="director" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input value="{{$Item->director}}" type="text" name="director" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-white0  text-dark">Item genre</label>
        @if ($Item==null)
        <input  type="text" name="genre" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input value="{{$Item->genre}}" type="text" name="genre" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-white0  text-dark">Item publication year</label>
        @if ($Item==null)
        <input  type="text" name="publication_year" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input  type="text" value="{{$Item->publication_year}}" name="publication_year" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-white0  text-dark">Item release year</label>
        @if ($Item==null)
        <input  type="text" name="release_year" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input  type="text" value="{{$Item->release_year}}" name="release_year" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-black text-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-white0  text-dark">Item item_type</label>
        @if ($Item==null)

        <select class="bg-black text-white" name="item_type" id="">
                <option value="movie">Movie</option>
                <option value="book">Book</option>


        </select>

        @else

        <select name="item_type" id="">
            @if ($Item->item_type == "movie")

            <option value="movie" selected>Movie</option>
            <option value="book">Book</option>

            @else
            <option value="movie">Movie</option>
            <option value="book" selected>Book</option>
            @endif


        </select>



        @endif
    </div>

    <div>
        <label>cPic1:* </label>
        <input type="file" name="pic" class="form-control">
    </div>


    @if ($Item==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
