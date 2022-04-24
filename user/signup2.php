<?php
include('../components/connection.php');
session_start(); 
if(filter_var($_SESSION['user'], FILTER_VALIDATE_EMAIL)){
  header('Location: ../user/home.php');
}
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Website</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <link href="style2.css" rel='stylesheet' />
</head>

<body>
    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(../assets/loginimage.jpg)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Smart Lyfe</h2>

                        <p class="max-w-xl mt-3 text-gray-300">To add to your cart, create an order and track your
                            order, you're going to need to login to your account. Simple. Easy. Smart.</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Smart Lyfe</h2>

                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign up to access your account</p>
                    </div>

                    <div class="mt-8">
                        <form action='../functions/insert.php' method='post' name='form'>

                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email
                                    Address</label>
                                <input type="email" name="email" id="email" placeholder="example@example.com"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                    required />
                            </div>

                            <div class="mt-6">
                            <div>
                                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Name</label>
                                <input type="text" name="name" id="name" placeholder="Sohag Kabir"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                    required />
                            </div>
</div>
<div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password"
                                        class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                </div>

                                <input type="password" name="pass" id="password1" placeholder="Your Password"
                                    class="block w-full px-4 py-2 mt-2  text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                    required />
                                    <p hidden id='pass1val' class="text-rose-500">Password needs to be greater than 8 characters</p>
                                    <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password"
                                        class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                        
                                </div>

                                <input type="password" name="pass" id="password2" placeholder="Your Password Again"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                    required />
                                    <p hidden id='pass2val' class="text-rose-500">Both passwords need to be matched</p>

                            </div>

                            <div class="mt-6">
                                <button disabled id="signup"
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Sign Up
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Already have an account? <a href="login2.php"
                                class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign In</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        let password8 = false;
        let match = false;
        $('#password1').on('keyup', function () {
            let p1 = $('#password1').val();
            let button = $('#signup');
            if(p1.length >0 && p1.length <8){
                $('#pass1val').show();
                password8 = false;
                button.prop("disabled", true);
            } else{
                $('#pass1val').hide();
                password8 = true;
                button.prop("disabled", false);
            }
            if(match && password8){
                button.prop("disabled", false);
            } else{
                button.prop("disabled", true);
            }
        });
        $('#password2').on('keyup', function () {
            let p1 = $('#password1').val();
            let p2 = $('#password2').val();
            let button = $('#signup');
            if(p1 != p2 && p2.length >0){
                match = false;
                $('#pass2val').show();
                button.prop("disabled", true);
            } else{
                $('#pass2val').hide();
                match = true;
                button.prop("disabled", false);
            }
            if(match && password8){
                button.prop("disabled", false);
            } else{
                button.prop("disabled", true);
            }
        });
        

    </script>
</body>

</html>