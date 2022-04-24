<?php

include('../components/connection.php');

session_start();
$currentUser = $_SESSION['user'];
if($_SESSION['role'] == "user"){
    $sqlcheck = "SELECT * FROM cart WHERE email = '$currentUser'";
    $result = $conn->query($sqlcheck);
if($result->num_rows == 0) {
    
} else{
    $sqlgetcart = "SELECT * FROM cart WHERE email = '$currentUser'";
    $getCart = $conn->query($sqlgetcart);
    $row = $getCart->fetch_assoc();
    $cart = explode(",",$row['list']);
    $_SESSION['cart'] = $cart;
    $clength = count($cart);

}
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Website</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <link href="style2.css" rel='stylesheet' />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body class='bg-slate-600'>
    <?php include('../components/navbar.php'); ?>

    <div class="flex flex-col pt-24 pb-24 justify-between md:flex-row md:px-12 lg:px-20 p-4 dark:bg-gray-800 transition duration-500">
  <div class="text-container space-y-14 mx-48 md:mt-10 md:w-1/2 my-12">
    <h1 class="text-2xl md:text-6xl text-black font-bold dark:text-white tracking-normal leading-10"><span class="text-cyan-600">Industry Leading</span> and <span class="text-fuchsia-300">Ground Breaking</span> products ready to integrate into your home</h1>

    <h2 class="text-gray-700 text-2xl font-light dark:text-white mt-8">
    Ever wanted to get your house up and running with all of the latest <span class="dark:text-white text-black font-semibold">Smart Home Technology</span>?
                    Look no further, as we offer industry leading products and ground breaking prices! Take a look at our catalog to make a start on your <span class="dark:text-white text-black font-semibold">Smart Home </span> journey today!
    </h2>
    <div id="output"></div>
    <div class="buttons-container flex space-x-2 md:space-x-4 text-white dark:text-white my-12">
      
    <button class="relative inline-flex items-center cursor-pointer transform transition duration-200 hover:shadow-xl hover:-translate-y-1 justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
  <span class=" text-lg relative px-8 py-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 ">
      Browse Products
  </span>
</button>
<button class="relative inline-flex cursor-pointer transform transition duration-200 hover:shadow-xl hover:-translate-y-1 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
  <span class="relative text-lg px-8 py-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 ">
      Build Your Home
  </span>
</button>

    </div>
  </div>
  <div class="image-container md:w-1/2 md:mt-10 md:-mr-20">
      <img class=" max-w-screen-md -mx-36" src='../assets/home.png' />
  </div>
</div>
</div>
    

<section class='bg-slate-500'>
  <div class="max-w-screen-2xl px-4 group py-8 mx-auto">
    <div>
      <span class="inline-block w-12 h-1 bg-white"></span>

      <h2 class="mt-1 text-2xl font-extrabold tracking-wide uppercase lg:text-3xl text-white">
        See what our customers have to say
      </h2>
    </div>
    
    <div class="grid grid-cols-2 mt-8 lg:grid-cols-2 gap-x-4 gap-y-8">
        <div class='flex justify-center space-x-8 items-center'>
                <div class="block bg-white arlo w-96 shadow-2xl transform transition duration-500 hover:scale-105 rounded-lg px-5 py-5" id="arlo">
                    <img alt="Trainer Product" src="../assets/52.png" class="object-cover w-full rounded-lg -mt-3 h-96" />
                    <h5 class="mt-4 text-lg font-bold text-black/90">
                        Arlo Doorbell
                    </h5>
                    <h5 class="mt-4 text-sm text-black/90">
                        Smart Doorbells
                    </h5>
                    <div class="flex items-center justify-between mt-4 font-bold">
                        <p class="text-lg">
                            £329.99
                        </p>
                        <p class="text-xs tracking-wide uppercase">
                            <button
                                class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" data-modal-toggle="extralarge-modal1">
                                More Details
                            </button>
                        </p>
                    </div>
                </div>
                <div class="block bg-white w-96 shadow-2xl transform transition duration-500 hover:scale-105 rounded-lg px-5 py-5" id='lifx'>
                    <img alt="Trainer Product" src="../assets/53.png" class="object-cover w-full rounded-lg -mt-3 h-96" />
                    <h5 class="mt-4 text-lg font-bold text-black/90">
                        LIFX Light
                    </h5>
                    <h5 class="mt-4 text-sm text-black/90">
                        Smart Lighting
                    </h5>
                    <div class="flex items-center justify-between mt-4 font-bold">
                        <p class="text-lg">
                            £29.99
                        </p>
                        <p class="text-xs tracking-wide uppercase">
                            <button
                                class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" data-modal-toggle="extralarge-modal">
                                More Details
                            </button>
                        </p>
                    </div>
                </div>
</div>
                <div class="text-center items-center flex flex-wrap justify-center">
                <div class="max-w-2xl p-4 text-gray-800 bg-opacity-60 bg-white transform transition duration-500 rounded-lg shadow" id='arlo1'>
  <div class="mb-2 ">
    <div class="h-3 text-3xl text-left text-gray-600">“</div>
    <p class="px-4 text-4xl text-center text-gray-600">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati
      laudantium recusandae laudantium recusandae 
    </p>
    <div class="h-3 text-3xl text-right text-gray-600">”</div>
    <p>- David Blaine from South Yorkshire</p>
  </div>
</div>
<div class="max-w-2xl p-4 text-gray-800 bg-opacity-60 bg-white transform transition duration-500 rounded-lg shadow" id="lifx1">
<div class="mb-2 ">
    <div class="h-3 text-3xl text-left text-gray-600">“</div>
    <p class="px-4 text-4xl text-center text-gray-600">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati
      laudantium recusandae laudantium recusandae 
    </p>
    <div class="h-3 text-3xl text-right text-gray-600">”</div>
    <p>- David Blaine from South Yorkshire</p>
  </div>
</div>
                </div>
</div>

<?php 

if($getProductNumber = htmlspecialchars($_GET["m"])){

    $sql = "SELECT * FROM products WHERE imagename = '$getProductNumber'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $category = $row['category'];
    $description = $row['description'];
    $price = $row['price'];
    $image = $row['imagename'];
    

    echo '     <!-- Extra Large Modal -->
    <div id="extralarge-modal2" data-modal-placement="center-center" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relativerounded-lg shadow bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    '.$name.' - '.$category.'
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="extralarge-modal2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="flex row">
                <!-- Modal body -->
                <div class="p-6 space-x-2">
                    <p class="text-3xl ml-2 font-bold leading-relaxed text-white">
                    '.$name.'
                </p>
                    <p class="text-base leading-relaxed pb-6 text-gray-500 dark:text-gray-400">
                '.$category.'   
                </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    '.$description.'  
                </p>
                <p class="bg-gray-800 px-5 py-2 rounded-lg w-min mt-12 text-3xl leading-relaxed text-gray-500 dark:text-gray-400">
                    £'.$price.'
                </p>
                    
                </div>
                <div class="flex">
                    <img src="../assets/'.$image.'.png" class="object-cover"/>
                </div>
    </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <ul class="my-4 space-y-3">
                        <li>
                        <form name="form" method="POST" action="../functions/addToCart.php">
                            <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <input hidden name="cartID" value='.$image.'>
                                <button type="submit name="cart" class="flex-1 whitespace-nowrap">Add to Cart</button>
                                </form>
                            </a>
                        </li>
    </ul>            </div>
            </div>
        </div>
    </div>';
}

?>

      <!-- Extra Large Modal -->
<div id="extralarge-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relativerounded-lg shadow bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                LIFX Mini Day & Dusk - Smart Lighting
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="extralarge-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="flex row">
            <!-- Modal body -->
            <div class="p-6 space-x-2">
                <p class="text-3xl ml-2 font-bold leading-relaxed text-white">
                LIFX Mini Day & Dusk
            </p>
                <p class="text-base leading-relaxed pb-6 text-gray-500 dark:text-gray-400">
            Smart Lighting    
            </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                LIFX Mini Day & Dusk (E27) Wi-Fi Smart LED Light Bulb, Adjustable, Dimmable, No Hub Required, Works with Alexa, Apple HomeKit and The Google Assistant  
            </p>
            <p class="bg-gray-800 px-5 py-2 rounded-lg w-min mt-12 text-3xl leading-relaxed text-gray-500 dark:text-gray-400">
                £19.29
            </p>
                
            </div>
            <div class="flex">
                <img src="../assets/53.png" class="object-cover"/>
            </div>
</div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
            <ul class="my-4 space-y-3">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <button class="flex-1 whitespace-nowrap">Add to Cart</button>
                        </a>
                    </li>
</ul>            </div>
        </div>
    </div>
</div>

  <!-- Extra Large Modal -->
  <div id="extralarge-modal1" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relativerounded-lg shadow bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                Arlo Doorbell - Smart Doorbells
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="extralarge-modal1">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="flex row">
            <!-- Modal body -->
            <div class="p-6 space-x-2">
                <p class="text-3xl ml-2 font-bold leading-relaxed text-white">
                Arlo Doorbell
            </p>
                <p class="text-base leading-relaxed pb-6 text-gray-500 dark:text-gray-400">
            Smart Doorbells    
            </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                Your home security system is not complete without an Arlo Doorbell. Interact remotely with visitors. 
            </p>
            <p class="bg-gray-800 px-5 py-2 rounded-lg w-min mt-12 text-3xl leading-relaxed text-gray-500 dark:text-gray-400">
                £100
            </p>
                
            </div>
            <div class="flex">
                <img src="../assets/52.png" class="object-cover"/>
            </div>
</div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
            <ul class="my-4 space-y-3">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <button class="flex-1 whitespace-nowrap">Add to Cart</button>
                        </a>
                    </li>
</ul>            </div>
        </div>
    </div>
</div>

      
    </div>
  </div>
</section>

<div class="pb-5 bg-slate-700 -mt-4">
    <div class="container flex flex-col items-center justify-center w-full p-6 mx-auto mt-4 text-center xl:px-0">
        <h2 class="max-w-2xl mt-3 text-3xl font-bold leading-snug tracking-tight text-white lg:leading-tight lg:text-4xl dark:text-white">Here&#x27;s what our customers said</h2>
        <p class="max-w-2xl py-4 text-lg leading-normal text-gray-500 lg:text-xl xl:text-xl dark:text-gray-300">Don't just take our word for it.... See what our users have said.</p>
    </div>
    <div class="container p-6 mx-auto mb-10 xl:px-0">
        <div class="grid gap-10 lg:grid-cols-2 xl:grid-cols-3">
            <div class="lg:col-span-2 xl:col-auto">
                <div class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 dark:bg-gray-800 md:px-14 rounded-2xl md:py-14 dark:bg-trueGray-800">
                    <p class="text-2xl leading-normal text-white">The most <mark class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4 dark:ring-indigo-900 dark:bg-indigo-900 dark:text-indigo-200">amazing</mark> products just waiting to be bought at your disposal You won't regret it.</p>
                    <div class="flex items-center mt-8 space-x-3">
                        <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                            <img alt="Avatar" src="https://images.unsplash.com/photo-1511485977113-f34c92461ad9?crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjIwMTQ5ODEx&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=100&amp;h=100" loading="lazy" />
                        </div>
                        <div>
                            <div class="text-lg font-medium text-white">Sarah Steiner</div>
                            <div class="text-gray-600 dark:text-gray-400">Regular Customer</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 dark:bg-gray-800 md:px-14 rounded-2xl md:py-14 dark:bg-trueGray-800">
                    <p class="text-2xl leading-normal text-white">Smart Lyfe only stock <mark class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4 dark:ring-indigo-900 dark:bg-indigo-900 dark:text-indigo-200">the best</mark> IOT devices for home automation. If you need anything, reach out to them.</p>
                    <div class="flex items-center mt-8 space-x-3">
                        <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                            <img alt="Avatar" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;crop=faces&amp;fit=crop&amp;w=100&amp;h=100&amp;q=80" loading="lazy" />
                        </div>
                        <div>
                            <div class="text-lg font-medium text-white">Dylan Ambrose</div>
                            <div class="text-gray-600 dark:text-gray-400">Researcher in IOT </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="flex flex-col justify-between w-full h-full px-6 py-6 bg-gray-100 dark:bg-gray-800 md:px-14 rounded-2xl md:py-14 dark:bg-trueGray-800">
                    <p class="text-2xl leading-normal text-white">With the help of Smart Lyfe, I have created <mark class="mx-1 text-indigo-800 bg-indigo-100 rounded-md ring-indigo-100 ring-4 dark:ring-indigo-900 dark:bg-indigo-900 dark:text-indigo-200">many projects</mark> for my clients and their home automation needs.</p>
                    <div class="flex items-center mt-8 space-x-3">
                        <div class="flex-shrink-0 overflow-hidden rounded-full w-14 h-14">
                            <img alt="Avatar" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=100&amp;h=100&amp;crop=faces&amp;q=80" loading="lazy" />
                        </div>
                        <div>
                            <div class="text-lg font-medium text-white">Gabrielle Winn</div>
                            <div class="text-gray-600 dark:text-gray-400">Home Automation Specialist</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-auto container py-16 align-center sm:px-6 px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 md:gap-8 gap-4">
                <div class="flex flex-col flex-shrink-0">
                    <div class="dark:text-white">
                       <p class=" text-3xl font-bold">Smart Lyfe</p>
                    </div>
                    <p class="text-sm leading-none text-gray-800 mt-4 dark:text-white">Copyright © 2022 Smart Lyfe</p>
                    <p class="text-sm leading-none text-gray-800 mt-4 dark:text-white">All rights reserved</p>
                    <div class="flex items-center gap-x-4 mt-12">
                        <button aria-label="instagram" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M9.00081 0.233398C6.68327 0.233398 6.39243 0.243215 5.48219 0.283343C4.57374 0.323644 3.95364 0.462973 3.41106 0.667403C2.84981 0.87855 2.37372 1.161 1.8994 1.62066C1.42473 2.08016 1.13317 2.54137 0.914502 3.08491C0.702944 3.61071 0.558942 4.2116 0.518053 5.09132C0.477342 5.97311 0.466675 6.25504 0.466675 8.50015C0.466675 10.7453 0.476986 11.0262 0.518231 11.9079C0.560009 12.788 0.703833 13.3887 0.914679 13.9144C1.13282 14.4581 1.42437 14.9193 1.89887 15.3788C2.37301 15.8386 2.8491 16.1218 3.40999 16.3329C3.95293 16.5373 4.57321 16.6767 5.48148 16.717C6.39171 16.7571 6.68238 16.7669 8.99974 16.7669C11.3175 16.7669 11.6074 16.7571 12.5176 16.717C13.4261 16.6767 14.0469 16.5373 14.5898 16.3329C15.1509 16.1218 15.6263 15.8386 16.1004 15.3788C16.5751 14.9193 16.8667 14.4581 17.0853 13.9145C17.2951 13.3887 17.4391 12.7878 17.4818 11.9081C17.5227 11.0263 17.5333 10.7453 17.5333 8.50015C17.5333 6.25504 17.5227 5.97328 17.4818 5.09149C17.4391 4.21143 17.2951 3.61071 17.0853 3.08508C16.8667 2.54137 16.5751 2.08016 16.1004 1.62066C15.6258 1.16082 15.1511 0.878377 14.5893 0.667403C14.0453 0.462973 13.4249 0.323644 12.5164 0.283343C11.6062 0.243215 11.3164 0.233398 8.99814 0.233398H9.00081ZM8.23525 1.72311C8.46245 1.72277 8.71597 1.72311 9.00077 1.72311C11.2792 1.72311 11.5492 1.73104 12.449 1.77065C13.281 1.8075 13.7326 1.94218 14.0334 2.05533C14.4316 2.20517 14.7155 2.38428 15.014 2.67362C15.3127 2.96295 15.4976 3.23851 15.6526 3.62429C15.7694 3.91535 15.9086 4.3528 15.9464 5.15881C15.9873 6.03026 15.9962 6.29204 15.9962 8.49823C15.9962 10.7044 15.9873 10.9662 15.9464 11.8377C15.9084 12.6437 15.7694 13.0811 15.6526 13.3722C15.4979 13.758 15.3127 14.0327 15.014 14.3218C14.7153 14.6112 14.4318 14.7903 14.0334 14.9401C13.7329 15.0538 13.281 15.1881 12.449 15.225C11.5494 15.2646 11.2792 15.2732 9.00077 15.2732C6.72217 15.2732 6.45212 15.2646 5.55256 15.225C4.72055 15.1878 4.26899 15.0531 3.96801 14.9399C3.56978 14.7901 3.28533 14.611 2.98666 14.3216C2.68799 14.0323 2.5031 13.7574 2.34808 13.3715C2.23128 13.0804 2.09208 12.643 2.05421 11.837C2.01332 10.9655 2.00514 10.7037 2.00514 8.49617C2.00514 6.2886 2.01332 6.0282 2.05421 5.15674C2.09226 4.35073 2.23128 3.91329 2.34808 3.62188C2.50275 3.2361 2.68799 2.96054 2.98666 2.67121C3.28533 2.38187 3.56978 2.20276 3.96801 2.05258C4.26881 1.93891 4.72055 1.80457 5.55256 1.76755C6.33977 1.7331 6.64484 1.72277 8.23525 1.72105V1.72311ZM13.5558 3.09574C12.9905 3.09574 12.5318 3.53956 12.5318 4.08741C12.5318 4.63508 12.9905 5.07942 13.5558 5.07942C14.1212 5.07942 14.5799 4.63508 14.5799 4.08741C14.5799 3.53974 14.1212 3.09574 13.5558 3.09574ZM9.00082 4.25481C6.58071 4.25481 4.61855 6.15564 4.61855 8.50013C4.61855 10.8446 6.58071 12.7446 9.00082 12.7446C11.4209 12.7446 13.3824 10.8446 13.3824 8.50013C13.3824 6.15564 11.4209 4.25481 9.00082 4.25481ZM9.00079 5.74454C10.5717 5.74454 11.8453 6.97818 11.8453 8.50013C11.8453 10.0219 10.5717 11.2557 9.00079 11.2557C7.42975 11.2557 6.15632 10.0219 6.15632 8.50013C6.15632 6.97818 7.42975 5.74454 9.00079 5.74454Z"
                                    fill="white"
                                />
                            </svg>
                        </button>
                        <button aria-label="linked-in" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M17.5333 8.4886C17.5333 9.04766 17.4746 9.60594 17.3592 10.1501C17.2467 10.6814 17.08 11.203 16.8617 11.7016C16.6483 12.1914 16.3837 12.6634 16.0745 13.1035C15.77 13.5409 15.4191 13.9512 15.0337 14.3253C14.6474 14.6977 14.2224 15.0367 13.7711 15.333C13.3152 15.6304 12.8273 15.8864 12.3215 16.094C11.806 16.3044 11.2664 16.4657 10.7184 16.5745C10.1559 16.6866 9.57755 16.7438 8.99962 16.7438C8.42126 16.7438 7.8429 16.6866 7.28121 16.5745C6.73244 16.4657 6.19283 16.3044 5.67779 16.094C5.17195 15.8864 4.68357 15.6304 4.22772 15.333C3.77645 15.0367 3.35143 14.6977 2.96599 14.3253C2.58015 13.9512 2.22928 13.5409 1.92427 13.1035C1.61675 12.6634 1.35172 12.1913 1.13755 11.7016C0.919183 11.203 0.752114 10.6814 0.639188 10.1501C0.525025 9.60594 0.466675 9.04766 0.466675 8.4886C0.466675 7.92913 0.524992 7.36965 0.639221 6.82665C0.752147 6.29538 0.919216 5.77299 1.13759 5.27519C1.35175 4.78505 1.61678 4.31265 1.9243 3.87246C2.22931 3.43473 2.58018 3.02517 2.96602 2.65069C3.35146 2.27823 3.77648 1.94007 4.22775 1.64421C4.6836 1.3455 5.17198 1.08958 5.67783 0.881567C6.19286 0.670713 6.73244 0.509099 7.28124 0.401087C7.84294 0.289844 8.4213 0.233398 8.99966 0.233398C9.57758 0.233398 10.1559 0.289844 10.7185 0.401087C11.2664 0.509131 11.806 0.670745 12.3215 0.881567C12.8273 1.08955 13.3153 1.3455 13.7711 1.64421C14.2224 1.94007 14.6475 2.27823 15.0337 2.65069C15.4191 3.02517 15.77 3.43473 16.0746 3.87246C16.3837 4.31265 16.6483 4.78508 16.8617 5.27519C17.08 5.77299 17.2467 6.29538 17.3592 6.82665C17.4746 7.36965 17.5333 7.92913 17.5333 8.4886ZM5.89026 2.11217C3.85805 3.0405 2.34131 4.85195 1.86836 7.03507C2.06048 7.03668 5.0973 7.07377 8.59622 6.17446C7.33492 4.00666 5.98735 2.23757 5.89026 2.11217ZM9.2 7.26001C5.44774 8.34669 1.84711 8.2685 1.71795 8.26369C1.71585 8.33945 1.71211 8.4128 1.71211 8.4886C1.71211 10.2996 2.41839 11.9507 3.57929 13.1991C3.57678 13.1954 5.57108 9.77282 9.50377 8.54262C9.59876 8.51199 9.69546 8.48456 9.79128 8.45797C9.60838 8.05732 9.40875 7.65584 9.2 7.26001ZM13.8124 3.1977C12.5293 2.10329 10.8447 1.43946 8.9996 1.43946C8.40748 1.43946 7.83286 1.50879 7.28242 1.63697C7.39157 1.77887 8.76042 3.53549 10.0067 5.74921C12.7565 4.75199 13.7944 3.22348 13.8124 3.1977ZM10.288 9.6261C10.2718 9.63131 10.2556 9.6358 10.2397 9.64142C5.93997 11.0914 4.53583 14.0136 4.52064 14.0455C5.75781 14.9762 7.30956 15.5377 8.99965 15.5377C10.0088 15.5377 10.9701 15.339 11.8448 14.9791C11.7368 14.3632 11.3135 12.2042 10.288 9.6261ZM13.0719 14.3349C14.7082 13.2668 15.8703 11.5706 16.1945 9.60591C16.0445 9.55916 14.0057 8.93477 11.6535 9.29958C12.6093 11.8407 12.9977 13.9101 13.0719 14.3349ZM10.5676 6.79966C10.7368 7.13585 10.9006 7.47801 11.0518 7.82188C11.1056 7.94524 11.1581 8.06618 11.2093 8.18708C13.7128 7.88233 16.1792 8.39506 16.2846 8.41599C16.2679 6.74483 15.65 5.21108 14.6275 4.01032C14.6137 4.02922 13.4449 5.66294 10.5676 6.79966Z"
                                    fill="white"
                                />
                            </svg>
                        </button>
                        <button aria-label="twitter" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.5208 3.59864L7.55438 4.13498L6.99479 4.0693C4.95791 3.81755 3.17843 2.9638 1.66756 1.52992L0.928908 0.818458L0.73865 1.34385C0.33575 2.51503 0.593158 3.75188 1.43253 4.58375C1.8802 5.04346 1.77948 5.10914 1.00725 4.8355C0.73865 4.74793 0.503625 4.68226 0.481242 4.71509C0.4029 4.79171 0.6715 5.78776 0.884142 6.18181C1.17513 6.72909 1.76828 7.26542 2.4174 7.58284L2.96579 7.83459L2.31668 7.84554C1.68994 7.84554 1.66756 7.85648 1.73471 8.08634C1.95854 8.79781 2.84268 9.55305 3.82755 9.88142L4.52143 10.1113L3.91708 10.4615C3.02175 10.965 1.96973 11.2496 0.917717 11.2715C0.414092 11.2825 0 11.3262 0 11.3591C0 11.4685 1.36538 12.0815 2.15999 12.3223C4.54382 13.0338 7.37531 12.7273 9.50173 11.5123C11.0126 10.6476 12.5235 8.92915 13.2286 7.26542C13.6091 6.37883 13.9896 4.75888 13.9896 3.98174C13.9896 3.47824 14.0232 3.41257 14.6499 2.81056C15.0192 2.4603 15.3662 2.0772 15.4333 1.96775C15.5452 1.75978 15.534 1.75978 14.9633 1.94586C14.012 2.27422 13.8777 2.23044 14.3477 1.73789C14.6947 1.38763 15.1088 0.752784 15.1088 0.566709C15.1088 0.533872 14.9409 0.5886 14.7506 0.68711C14.5492 0.796566 14.1015 0.96075 13.7658 1.05926L13.1614 1.24534L12.613 0.884131C12.3108 0.68711 11.8856 0.468198 11.6617 0.402524C11.0909 0.249286 10.218 0.271177 9.70318 0.446307C8.30422 0.938859 7.42008 2.20855 7.5208 3.59864Z"
                                    fill="white"
                                />
                            </svg>
                        </button>
                        <button aria-label="youtube" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 opacity-50 w-8 h-8 flex-shrink-0 bg-gray-800 cursor-pointer hover:bg-gray-700 rounded-full flex items-center justify-center">
                            <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M15.6677 1.17143C16.4021 1.36664 16.9804 1.94183 17.1767 2.67227C17.5333 3.99611 17.5333 6.75832 17.5333 6.75832C17.5333 6.75832 17.5333 9.52043 17.1767 10.8444C16.9804 11.5748 16.4021 12.15 15.6677 12.3453C14.3369 12.7 9.00001 12.7 9.00001 12.7C9.00001 12.7 3.66309 12.7 2.33218 12.3453C1.59783 12.15 1.0195 11.5748 0.823232 10.8444C0.466675 9.52043 0.466675 6.75832 0.466675 6.75832C0.466675 6.75832 0.466675 3.99611 0.823232 2.67227C1.0195 1.94183 1.59783 1.36664 2.33218 1.17143C3.66309 0.81665 9.00001 0.81665 9.00001 0.81665C9.00001 0.81665 14.3369 0.81665 15.6677 1.17143ZM7.40002 4.43326V9.59993L11.6667 7.01669L7.40002 4.43326Z"
                                    fill="white"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="sm:ml-0 ml-8 flex flex-col">
                    <h2 class="text-base font-semibold leading-4 text-gray-800 dark:text-white">Product Categories</h2>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Smart Speakers</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Smart Kitchen</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Smart Doorbells</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Smart Lighting</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Smart Wearables</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Smart TV's</a>
                </div>
                <div class="flex flex-col">
                    <h2 class="text-base font-semibold leading-4 text-gray-800 dark:text-white">Support</h2>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Legal policy</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Status policy</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Privacy policy</a>
                    <a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500 text-base leading-4 mt-6 text-gray-800 dark:text-white cursor-pointer">Terms of service</a>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18851.37126645992!2d-1.77508305!3d53.79978475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1650384586407!5m2!1sen!2suk" style="filter: invert(90%)" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="mt-10 lg:hidden">
                <label class="text-xl font-medium leading-5 text-gray-800 dark:text-white">Get updates</label>
                <div class="flex items-center justify-between border border-gray-800 dark:border-white mt-4">
                    <input type="text" class="text-base leading-4 p-4 relative z-0 w-full focus:outline-none text-gray-800 placeholder-gray-800 dark:text-white dark:placeholder-white dark:border-white dark:bg-gray-900" placeholder="Enter your email" />
                    <button aria-label="send" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer mr-4 cursor-pointer relative z-40">
                        <svg class="fill-current text-gray-800 hover:text-gray-500 dark:text-white dark:hover:text-gray-200" width="16" height="17" viewBox="0 0 16 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.8934 7.39673L14.8884 7.39457L1.54219 1.9166C1.42993 1.87011 1.30778 1.85187 1.18666 1.86353C1.06554 1.87519 0.949225 1.91637 0.848125 1.9834C0.741311 2.05266 0.653573 2.14711 0.592805 2.25826C0.532037 2.36941 0.500145 2.49376 0.5 2.62013V6.12357C0.50006 6.29633 0.561019 6.46366 0.67237 6.59671C0.783722 6.72976 0.938491 6.82021 1.11 6.85246L8.38906 8.18438C8.41767 8.18974 8.44348 8.20482 8.46205 8.22701C8.48062 8.2492 8.49078 8.2771 8.49078 8.30591C8.49078 8.33472 8.48062 8.36263 8.46205 8.38481C8.44348 8.407 8.41767 8.42208 8.38906 8.42744L1.11031 9.75936C0.938851 9.79153 0.784092 9.88185 0.67269 10.0148C0.561288 10.1477 0.500219 10.3149 0.5 10.4876V13.9917C0.499917 14.1124 0.530111 14.2312 0.587871 14.3374C0.645632 14.4437 0.729152 14.5341 0.830938 14.6006C0.953375 14.6811 1.09706 14.7241 1.24406 14.7243C1.34626 14.7242 1.4474 14.7039 1.54156 14.6646L14.8875 9.21787L14.8934 9.21509C15.0731 9.13869 15.2262 9.01185 15.3337 8.85025C15.4413 8.68866 15.4986 8.49941 15.4986 8.30591C15.4986 8.11241 15.4413 7.92316 15.3337 7.76157C15.2262 7.59997 15.0731 7.47313 14.8934 7.39673Z"
                                fill="currentColor"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <button hidden
        id="showModal"
        class="hidden w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button" data-modal-toggle="extralarge-modal2"></button>
        <script type="text/javascript">
        $(document).ready(function () {
        $('#showModal').trigger("click");
            $('#arlo').hover(function(){
                console.log('oof');
                $('#arlo1').css("--tw-bg-opacity", "1");
                $('#arlo1').css("--tw-scale-x", "1.05");
                $('#arlo1').css("--tw-scale-y", "1.05");
                $('#arlo1').css("transform", "translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))");
            }, function(){
                $('#arlo1').css("--tw-bg-opacity", "0.6");
                $('#arlo1').css("--tw-scale-x", "1");
                $('#arlo1').css("--tw-scale-y", "1");
            })

            $('#lifx').hover(function(){
                console.log('oof');
                $('#lifx1').css("--tw-bg-opacity", "1");
                $('#lifx1').css("--tw-scale-x", "1.05");
                $('#lifx1').css("--tw-scale-y", "1.05");
                $('#lifx1').css("transform", "translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))");
            }, function(){
                $('#lifx1').css("--tw-bg-opacity", "0.6");
                $('#lifx1').css("--tw-scale-x", "1");
                $('#lifx1').css("--tw-scale-y", "1");
            })

            $('#output').html("");
            $(".live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: '../components/search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#output').html("");
                            $('#output').show();
                            $('#output').html(data);
                            $(".live_search").focusout(function () {

                            });
                            $(".live_search").focusin(function () {
                                var currentQuery = $(this).val();
                                if(currentQuery != ""){
                                    $('#output').show();
                                $('#output').html(data);
                                }
                            });

                        }
                    });
                } else {
                    $('#output').hide();
                    $('#output').html("");
                }
            });
        });
    </script>

    <!-- TailWind core JS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>

</html>