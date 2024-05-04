<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="p-24 bg-black">
    <h1 class="text-3xl font-bold text-center text-white">
        Books and Movies Manager
    </h1>
    <div class="flex justify-around items-center lg:flex-row flex-col m-8 mt-24">
        @foreach ($items as $item)
        <div class="w-[320px] h-[550px]  relative hover:shadow-2xl hover:scale-105 duration-500 hover:-translate-y-3">
            <img class="w-full h-full brightness-75 object-cover"
                src="{{ URL::to('./SiteImages/Items/1/'. $item->pic ) }}" alt="">
            <h1
                class="font-monta font-black text-white uppercase text-2xl text-center break-words absolute top-10 left-0 right-0">
                {{$item->title}}</h1>
            <h1
                class="font-monta font-normal text-white uppercase text-xl top-28 text-center break-words absolute  left-0 right-0">
                {{$item->item_type}}</h1>

            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                onclick="document.getElementById('id').value = 7" class="absolute bottom-0 left-0 w-full h-fit  ">

                <div class=" bg-C3 px-8 py-4   border-white border-b-4 flex justify-center items-center">
                    <h1 class=" text-white uppercase font-monta font-black text-2xl ">Check More !</h1>



                </div>
            </button>


        </div>

        @endforeach

    </div>
</body>

</html>
