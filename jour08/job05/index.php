<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf646263c8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                backgroundImage: {
                    'main': "url('https://images.unsplash.com/photo-1635891536336-1190d5ff10ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80')",
                    'grad': 'linear-gradient(180deg, rgba(255,255,255,0.5) 19%, rgba(100,100,100,0.6) 33%, rgba(0,0,0,0.7) 63%, rgba(0,0,0,1) 83%);'
                },
                fontFamily: {
                    'playfair': 'Playfair Display'
                }
            }


        }
    </script>
</head>
<body class="box-border">
    <div class="bg-main bg-cover bg-no-repeat relative -z-0 w-full h-screen overflow-hidden">
        <div class="absolute inset-0 w-full h-screen -z-10 bg-grad opacity-95"></div>
        <div class="h-screen">
            <header class="flex justify-between items-center w-4/5 my-0 m-auto py-8 text-slate-50">
                <div class="flex items-center w-16 text-zinc-50">
                    <img src="./pngwing.com.png" alt="" class="z-20 w-2/5 mr-1">
                    <p class="h-fit text-2xl font-playfair font-bold">Wander</p>
                </div>
                <nav class="flex justify-between items-center space-x-12">
                    <ul class="flex justify-between items-center space-x-12">
                        <li><a href=""
                                class="py-1 hover:text-yellow-300 hover:border-b-yellow-300 hover:border-b-2">Products</a>
                        </li>
                        <li><a href=""
                                class="py-1 hover:text-yellow-300 hover:border-b-yellow-300 hover:border-b-2">Properties</a>
                        </li>
                        <li><a href=""
                                class="py-1 hover:text-yellow-300 hover:border-b-yellow-300 hover:border-b-2">About</a>
                        </li>
                        <li><a href=""
                                class="py-1 hover:text-yellow-300 hover:border-b-yellow-300 hover:border-b-2">Blog</a>
                        </li>
                    </ul>
                    <button
                        class="border rounded-full py-0.5 px-4 hover:text-yellow-300 hover:border-2 hover:border-yellow-300">Sign
                        In</button>
                </nav>
            </header>
            <main class="flex items-end text-slate-50">
                <div class="w-7/12 m-auto mt-64 border-2 border-slate-300 border-x-transparent border-t-transparent pb-8 border-opacity-60">
                    <p class="uppercase tracking-widest text-slate-300 opacity-80">cave creek, arizona</p>
                    <h1 class="capitalize text-[64px] font-playfair font-bold">wander cave creek</h1>
                    <p class="text-[22px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptates ducimus mollitia,
                        possimus odio quos perspiciatis deserunt iusto voluptatem delectus porro fuga fugit dolore quas
                        ea esse quis illum explicabo.
                    </p>
                    <div class="flex justify-between mt-8 ">
                        <div>
                            <button class="rounded-full bg-slate-500 bg-opacity-40 py-2 px-5">Download the app</button>
                        </div>
                        <div class="text-[14px]">
                            <div class="flex justify-end space-x-4 mr-4">
                                <div><i class="fa-solid fa-square-h mr-1"></i><span>3 bedrooms</span></div>
                                <div><i class="fa-solid fa-bed-pulse mr-1"></i><span>2 King beds</span></div>                                
                                <div><i class="fa-solid fa-bed-pulse mr-1"></i><span>1 queen bed</span></div>
                                <div><i class="fa-solid fa-shower mr-1"></i><span>2,5 bathrooms</span></div>
                            </div>
                            <div class="flex justify-end space-x-4 mt-1">
                                <div><i class="fa-solid fa-person mr-1"></i><span>Up to 6</span></div>
                                <div><i class="fa-regular fa-square mr-1"></i></i><span>2500 sqft</span></div>
                                <button class="rounded-full bg-slate-500 bg-opacity-40 py-1 px-3">See all 28 amenities <i class="fa-solid fa-arrow-right text-[10px] ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>