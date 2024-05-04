<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books&Movies Manager</title>
</head>
<body>
    <div class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2" style="background: black;
          padding: 2rem;
          border-radius: 25px;">
          <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
            <h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">{{$item->title}}</h1>
            <p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">{{$item->release_year}}</p>
          </div>
          <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img style="    object-fit: contain;
            " src="{{ URL::to('./SiteImages/Items/1/'. $item->pic ) }}" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
          </div>
          <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">

            <dt class="sr-only">...</dt>
            <dd class="flex items-center">

              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
                <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z"></path>
                <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"></path>
              </svg>
              ...
            </dd>
          </dl>

          <p class="mt-2 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-5 lg:row-start-3 lg:col-span-1 dark:text-slate-400">

          </p>
        </div>
      </div>
</body>
</html>
