<div>
{{--    Applying Tailwind CSS Grid classes--}}
    <div class="w-full h-max bg-blue-500 grid grid-cols-5 gap-5">
        <div class="grid-cols-1 h-20 ">
            <img class="w-full h-full pr-10" src="{{asset("Images/Logo.png")}}">
        </div>
        <div class="col-span-2 h-20">
            <ul class="grid grid-cols-4 w-9/12 m-auto h-full">
                <li class="h-full block overflow-hidden">
                    <a class="block py-6 text-justify align-middle font-bold font-serif text-white text-2xl" href="#" >Home</a></li>
                <li class="h-full block overflow-hidden">
                    <a class="block py-6 text-justify align-middle font-bold font-serif text-white text-2xl" href="#" >Offers</a></li>
                <li class="h-full block overflow-hidden">
                    <a class="block py-6 text-justify align-middle font-bold font-serif text-white text-2xl" href="#" >About</a></li>
                <li class="h-full block overflow-hidden">
                    <a class="block py-6 text-justify align-middle font-bold text-white font-serif text-2xl" href="#" >Contact</a></li>
            </ul>
        </div>
        <div class="col-span-2 h-20  grid grid-cols-5">
            <ul class="col-span-1">
                <li class="overflow-hidden  w-full"><a class="block text-right py-6 text-justify align-middle font-bold  font-serif text-2xl text-white" href="#" >Log In</a></li>
            </ul>
            <form class="block col-span-4 h-full">
                <input type="text" placeholder="Search" class="my-5 ml-2 w-8/12 h-3/6 rounded p-2">
                <input type="submit" value="Search" class="text-justify font-bold h-3/6 font-serif text-lg bg-blue-400 px-3 text-white rounded">
            </form>
        </div>
    </div>
</div>
