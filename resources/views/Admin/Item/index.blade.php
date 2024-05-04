@extends('Admin.Layouts.app')
@section("title")
Item Manager
@endsection
@section("content")
<div class="p-4">
    <a href="{{route('admin.Item.manage.showAdd')}}" class="font-xl  text-white border-white border-4 font-medium bg-C1 p-4">ADD </a>
    <div class="my-2">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full ">
                    <thead class=" border-b">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            ID
                          </th>

                          <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            item type
                          </th>
                          <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            title
                          </th>
                          <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            author
                          </th>
                          <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            publication_year
                          </th>

                          <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                            Manage
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($Items as $item)
                    <tr class=" border-b">
                        <td class="text-base text-white  px-6 py-4 whitespace-nowrap">{{$item->id}}</td>
                        <td class="text-base text-white  px-6 py-4 whitespace-nowrap">{{$item->item_type}}</td>
                        <td class="text-base text-white  px-6 py-4 whitespace-nowrap">{{$item->title}}</td>
                        <td class="text-base text-white  px-6 py-4 whitespace-nowrap">{{$item->author}}</td>
                        <td class="text-base text-white  px-6 py-4 whitespace-nowrap">{{$item->publication_year}}</td>
                        <td class="text-base text-white text-start  px-6 py-4 whitespace-nowrap"><a class="bg-primary py-2 px-6 text-white font-pop text-base" href="{{route('admin.Item.showPerID', ['id'=>$item->id])}}">Manage</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>






    </div>


</div>

@endsection
