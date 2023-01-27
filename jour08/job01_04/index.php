<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cf646263c8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    'mono': ['Aboreto']
                },
                colors: {
                    'myRed': 'rgba(188, 78, 66, 0.69)',
                    'myRedHover': 'rgba(188, 78, 66, 0.83)',
                    'lightBlack': 'rgba(9, 9, 16, 0.76)',
                    'smWhite': '#FFFAF1',
                    'footer': '#EDFFFF'
                },
                boxShadow: {
                    'my': '0px 0px 20px 10px rgba(220,242,255,0.65)',
                    'form': '0px 0px 10px 0px rgba(188, 78, 66, 0.69)',
                    'input': 'inset 0px 0px 5px -2px rgba(255,64,29,0.52)'
                },
                transitionProperty: {
                    'border': 'border'
                }
            }
        }
    </script>
</head>

<body class="box-border">
    <header class="bg-myRed py-2">
        <div class="header-container flex justify-between w-11/12 object-center my-0 m-auto">
            <div class="logo w-14">
                <img class="w-full" src="./png-transparent.png" alt="">
            </div>
            <nav class="nav">
                <ul class="flex justify-between font-mono space-x-4">
                    <li class="p-2 rounded-full hover:bg-myRedHover transition duration-400 ease-in"><a class="p-2"
                            href="#">Accueil</a></li>
                    <li class="p-2 rounded-full hover:bg-myRedHover transition duration-400 ease-in"><a class="p-2"
                            href="#">Inscription</a></li>
                    <li class="p-2 rounded-full hover:bg-myRedHover transition duration-400 ease-in"><a class="p-2"
                            href="#">Connexion</a></li>
                    <li class="p-2 rounded-full hover:bg-myRedHover transition duration-400 ease-in"><a class="p-2"
                            href="#">Rechercher</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="p-2">
        <form action="">
            <div class="form-container w-3/4 my-10 m-auto bg-smWhite p-8 shadow-form">
                <h1 class="text-center uppercase text-3xl text-myRedHover">Please fill the form</h1>
                <div class="radio-block flex space-x-6 mb-4 text-myRedHover">
                    <div class="radio-block__item flex flex-col text-center">
                        <label for="mme" class="mb-1">Mme.</label>
                        <input type="radio" id="mme" name="sex" required>
                    </div>
                    <div class="radio-block__item flex flex-col text-center">
                        <label for="mr" class="mb-1">Mr.</label>
                        <input type="radio" id="mr" name="sex" required>
                    </div>
                </div>
                <div class="text-block  space-y-4 flex flex-col">
                    <div class="space-x-3 flex justify-between">
                        <div class="w-1/4 relative">
                            <input type="text" name="nom" placeholder="Name"
                                class="w-full p-2 pl-8 focus:outline-myRed shadow-input placeholder:text-myRedHover">
                                <i class="fa-solid fa-keyboard absolute top-3 left-2 text-myRedHover"></i>
                        </div>
                        <div class="w-1/4 relative">
                            <input type="text" placeholder="Surname"
                                class="w-full p-2 pl-8 focus:outline-myRed shadow-input placeholder:text-myRedHover">
                                <i class="fa-solid fa-keyboard absolute top-3 left-2 text-myRedHover"></i>
                        </div>
                        <div class="w-2/5 relative">
                            <input type="email" placeholder="Email"
                                class="w-full p-2 pl-8 focus:outline-myRed shadow-input placeholder:text-myRedHover">
                                <i class="fa-solid fa-at absolute top-3 left-2 text-myRedHover"></i>
                        </div>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Adress"
                            class="w-full p-2 pl-8 focus:outline-myRed shadow-input placeholder:text-myRedHover">
                            <i class="fa-solid fa-location-dot absolute top-3 left-2 text-myRedHover ml-1"></i>
                    </div>
                    <div class="flex nowrap justify-center space-x-12">
                        <div class="w-5/12 relative">
                            <input type="password" name="" id="" placeholder="password"
                                class="w-full p-2 pl-8 mr-1 focus:outline-myRed shadow-input placeholder:text-myRedHover">
                                <i class="fa-solid fa-key absolute top-3 left-2 text-myRedHover"></i>
                        </div>
                        <div class="w-5/12 relative">
                            <input type="password" name="" id="" placeholder="confirm password"
                                class="w-full p-2 pl-8 focus:outline-myRed shadow-input placeholder:text-myRedHover">
                                <i class="fa-solid fa-key absolute top-3 left-2 text-myRedHover"></i>
                        </div>
                    </div>
                </div>
                <div class="ckeckbox-block text-myRedHover mt-4 mb-6">
                    <h3 class="text-2xl ml-4 mb-2">Your Hobbies</h3>
                    <label for="sport" class="mr-1">sport</label>
                    <input type="checkbox" id="sport" class="scale-150 accent-myRed mr-3">
                    <label for="voyages" class="mr-1">voyages</label>
                    <input type="checkbox" id="voyages" class="scale-150 accent-myRed mr-3">
                    <label for="baise" class="mr-1">baise</label>
                    <input type="checkbox" id="baise" class="scale-150 accent-myRed mr-3">
                    <label for="bouffe" class="mr-1">bouffe</label>
                    <input type="checkbox" id="bouffe" class="scale-150 accent-myRed mr-3">
                    <label for="baisebouffe" class="mr-1">baise et bouffe</label>
                    <input type="checkbox" id="baisebouffe" class="scale-150 accent-myRed mr-3">
                </div>
                <button type="submit" class="p-3 w-1/5 bg-myRed rounded-full uppercase">submit</button>
            </div>
        </form>

    </main>
    <footer class="h-24 bg-footer shadow-my pt-4">
        <nav class="nav w-3/4 my-0 m-auto">
            <ul class="flex justify-between font-mono space-x-4">
                <li class="p-2 rounded-md hover:border transition-border duration-100 ease-out"><a class="p-2"
                        href="#">Accueil</a></li>
                <li class="p-2 rounded-md hover:border transition-border duration-100 ease-out"><a class="p-2"
                        href="#">Inscription</a></li>
                <li class="p-2 rounded-md hover:border transition-border duration-100 ease-out"><a class="p-2"
                        href="#">Connexion</a></li>
                <li class="p-2 rounded-md hover:border transition-border duration-100 ease-out"><a class="p-2"
                        href="#">Rechercher</a></li>
            </ul>
        </nav>
    </footer>
</body>

</html>