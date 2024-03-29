
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community</title>
    <link rel="stylesheet" href="{{url('css/formateur.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

    </head>
<body>
<!---------------------------------------------------- header ------------------------------------------------------>

    <header>
        <div class="left-section">
            <img src="{{ asset('img/vg0CZ05S.jpg') }}">
        </div>




        <div class="right-section">
            <img src=" {{ asset('img/ME.jpg') }}" alt="" id="me" data-dropdown-toggle="dropdownInformation">



<!-- Dropdown menu -->
<div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-70 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div class="font-medium truncate text-xl">mahdiyahiaoui@supmti.com</div>
    </div>
    <ul class="py-2 text-xl text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
        <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
        </li>
        <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>

    </ul>
    <div class="py-2">
        <a href="#" class="block px-4 py-2 text-xl text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">log out</a>
    </div>
</div>
@auth




    @foreach ($formateurs as $formateur)
    @if ($formateur->utilisateur->id ===auth()->user()->id)


    <span id="nom"><strong>{{ $formateur->nom .  $formateur->prenom}}</strong></span>
    @endif
    @endforeach

@endauth
        </div>
    </header>
                    <!----------------------------------------------------fin header ------------------------------------------------------>

<!----------------------------- container li jam3 la page kamla mn ghir lheader howa had  content-area------------------------------------------------------>
<div class="content-area">
    <!---------------------------------------------------- left-sidebar  -- jiha lisrya ----------------------------------------------------->
        <div class="left-sidebar">
<!---------------------------------------------------- had fix-container howa li jame3 h1 d formateurs o recherch barre  ------------------------------------------------------>

            <div class="fix-container">

                <h1><strong>formateurs</strong></h1>
                <div class="mid-section">
                <form action="">
                    <input type="text" placeholder="Search">
                    <button type="button"><span class="material-symbols-outlined">search</span></button>
                </form>
            </div>

            <nav>
<!---------------------------------------------------- link homa kola formateurs bohdo ------------------------------------------------------>

                <a href="" class="link">
                    <img src="{{ asset('img/man.png') }}" class="img-teacher">
                    <div class="discription">
                    <span id="active-span">Elmahdi yahiaoui</span>
                    <p>Lorem ipsum dolor sit consectetur elit.</p>
                    </div>
                </a>

            </nav>
        </div>
        <!---------------------------------------------------- fin left-sidebar------------------------------------------------------>
    </div>
        <!---------------------------------------------------- main-content---- hada howa la partie lwestanya-------------------------------------------------->
        <div class="main-content">

            <!-------------------- detaills-container---- hada howa lfo9 dial chat ------------------->
            <div class="detaills-container">
                <div class="right-side">
                    <img src="{{asset("img/ME.jpg")}}" alt="">
                    <span><strong>ELMAHDI YAHIAOUI</strong></span>
                </div>
                <div class="left-side">
                    <img src="{{asset("img/phone-receiver-silhouette.png")}}" alt="" id="phone">
                    <img src="{{asset("img/video-camera.png")}}" alt="" id="camera" >
                    <img src="{{asset("img/list.png")}}" alt="" id="list">
                </div>
            </div>
                <!-------------------- chat-container------- hada blasa li kaikhrjo fiha les msj---------------->
<div class="chat-container">
    <div class="chat outgoing" id="outgoing">
        <div class="details">
            <form action="">
                <img src="{{asset("img/list.png")}}" alt="" id="imgList" data-dropdown-toggle="dropdown1" >
                    <!-- Dropdown menu -->
                    <div id="dropdown1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                            </li>
                            <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                            </li>
                            <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Copy</a>
                            </li>

                        </ul>
                    </div>
            </form>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis rerum minima ipsam unde pariatur delectus impedit tempora commodi, fugiat expedita natus saepe dolorum illo illum voluptate. Enim sapiente odit molestias!</p>
        </div>
    </div>
    <div class="chat incoming">
        <img src="{{asset("img/ME.jpg")}}" alt="" >
            <div class="details">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis rerum minima ipsam unde pariatur delectus impedit tempora commodi, fugiat expedita natus saepe dolorum illo illum voluptate. Enim sapiente odit molestias!</p>
                <img src="{{asset("img/list.png")}}" alt="" id="imgList" data-dropdown-toggle="dropdown2" >
                    <!-- Dropdown menu -->
                    <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                            </li>
                            <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                            </li>
                            <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Copy</a>
                            </li>

                        </ul>
                    </div>
            </form>
        </div>
    </div>
</div>
<!---------------------------------------------------- fin chat-container ------------------------------------------------------>


<!---------------------------------------- message-container ----- hada l input li katkteb fiha msj dialk------------------------------------------------->

            <div class="message-container">

                <form>
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
                    <button type="file" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                        <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                        </svg>
                        <span class="sr-only">Upload image</span>
                    </button>

                    <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-md text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                        <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                        <svg class="w-8 h-8 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
                        </svg>
                        <span class="sr-only">Send message</span>
                    </button>
                    </div>
                </form>
            </div>


        </div>


<div>thi</div>


<!-------------------------------------- right-sidebar------- hadi hya jiha limnya li fiha les groupes o les annances----------------------------------------------->


<div class="right-sidebar">
    <aside>
        <div class="fix-groupe-container">
            <h2 class="groupe"><strong>groups</strong></h2>
            <div class="groupes">
                <div>
                    <a href="" class="links ">
                        <img src="{{asset("img/group.png")}}" alt="" class="img-group">
                        <span id="active-span">groupe SUPMTI</span>
                    </a>
                </div>




                @foreach ($formateurs as $formateur)
                @if (auth()->user()->id === $formateur->utilisateur->id)
                    @foreach ($formateur->classes as $item)

                        @foreach ($filieres as $filiere)
                            @if ($item->niveau->id_filiere === $filiere->id_filiere)




                            <div>
                                <a href="" class="links ">
                                    <img src="{{asset("img/group.png")}}" alt="" class="img-group">
                                    <span id="active-span">{{$item->num_groupe}}</span>
                                </a>
                            </div>









                            @endif
                        @endforeach
                    @endforeach
                @endif
            @endforeach






                @endforeach
                @endif
                @endforeach
                @endauth





            </div>

        </div>
    <section>
        <h2 class="annance"><strong>annances</strong></h2>

        <div class="annances-container">

@foreach ($actualetes as $item)


            <a href="" class="annances ">
                <span id="active-span">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore non esse, itaque necessitatibus vero quam perferendis alias autem porro veniam commodi, totam delectus minus laudantium. Sed impedit minima commodi magni?</span>
            </a>


            @endforeach
        </section>
    </aside>

</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>


