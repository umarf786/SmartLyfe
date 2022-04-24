<?php
include('../components/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Website</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <link href="./styles/style.css" rel='stylesheet' />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body class='bg-slate-600'>
<div class="grid grid-cols-12 grid-rows-3 ">
    <?php include '../components/sidebar.php';?>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg grid col-span-9 my-8 mx-5">

        <?php 
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $id2 = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $category = $row['category'];
        $desc = $row['description'];
        if($category == "Smart Wearables"){
            $cats = '<option value="">--Please choose an option--</option>
                    <option selected value="Smart Wearables">Smart Wearables</option>
                    <option value="Smart Speakers">Smart Speakers</option>
                    <option value="Smart Kitchen">Smart Kitchen</option>
                    <option value="Smart Doorbells">Smart Doorbells</option>
                    <option value="Smart Lighting">Smart Lighting</option>
                    <option value="Smart TVs">Smart TVs</option>';
        } else if($category == "Smart Speakers"){
            $cats = '<option value="">--Please choose an option--</option>
            <option value="Smart Wearables">Smart Wearables</option>
            <option selected value="Smart Speakers">Smart Speakers</option>
            <option value="Smart Kitchen">Smart Kitchen</option>
            <option value="Smart Doorbells">Smart Doorbells</option>
            <option value="Smart Lighting">Smart Lighting</option>
            <option value="Smart TVs">Smart TVs</option>';
        } else if($category == "Smart Kitchen"){
            $cats = '<option value="">--Please choose an option--</option>
            <option value="Smart Wearables">Smart Wearables</option>
            <option value="Smart Speakers">Smart Speakers</option>
            <option selected value="Smart Kitchen">Smart Kitchen</option>
            <option value="Smart Doorbells">Smart Doorbells</option>
            <option value="Smart Lighting">Smart Lighting</option>
            <option value="Smart TVs">Smart TVs</option>';
        }  else if($category == "Smart Doorbells"){
            $cats = '<option value="">--Please choose an option--</option>
            <option value="Smart Wearables">Smart Wearables</option>
            <option value="Smart Speakers">Smart Speakers</option>
            <option value="Smart Kitchen">Smart Kitchen</option>
            <option selected value="Smart Doorbells">Smart Doorbells</option>
            <option value="Smart Lighting">Smart Lighting</option>
            <option value="Smart TVs">Smart TVs</option>';
        } else if($category == "Smart Lighting"){
            $cats = '<option value="">--Please choose an option--</option>
            <option value="Smart Wearables">Smart Wearables</option>
            <option  value="Smart Speakers">Smart Speakers</option>
            <option value="Smart Kitchen">Smart Kitchen</option>
            <option value="Smart Doorbells">Smart Doorbells</option>
            <option selected value="Smart Lighting">Smart Lighting</option>
            <option value="Smart TVs">Smart TVs</option>';
        }  else if($category == "Smart TVs"){
            $cats = '<option value="">--Please choose an option--</option>
            <option value="Smart Wearables">Smart Wearables</option>
            <option selected value="Smart Speakers">Smart Speakers</option>
            <option value="Smart Kitchen">Smart Kitchen</option>
            <option value="Smart Doorbells">Smart Doorbells</option>
            <option value="Smart Lighting">Smart Lighting</option>
            <option selected value="Smart TVs">Smart TVs</option>';
        } else{
            $cats = '<option selected value="">--Please choose an option--</option>
            <option value="Smart Wearables">Smart Wearables</option>
            <option value="Smart Speakers">Smart Speakers</option>
            <option value="Smart Kitchen">Smart Kitchen</option>
            <option value="Smart Doorbells">Smart Doorbells</option>
            <option value="Smart Lighting">Smart Lighting</option>
            <option value="Smart TVs">Smart TVs</option>';
        }
echo'<div id="'.$id.'" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-lg h-full md: h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2"><button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="'.$id.'"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></button></div>
            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="POST" action="../functions/update.php">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit Product</h3>
                <div><label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product
                        Name</label><input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="'.$name.'" required=""></div>
                        <div><label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label><input type="text" name="desc" id="desc"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        value="'.$desc.'" required=""></div>
                <div><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="category">Category:</label>
                <select value = "'.$category.'"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" name="category" id="category" required>    
                '.$cats.'
                </select></div>
                <input type="hidden" id="ida" name="ida" value="'.$id.'">
                <div><label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price (£)</label><input
                        type="text" name="price" value="'.$price.'" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                     required=""></div>
                <div class="flex justify-between">
                    <div class="flex items-start"></div>
                </div><button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                    Product</button>
            </form>
        </div>
    </div>
</div>';
}
?>

        <div id="uadd" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-full max-w-lg h-full md: h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex justify-end p-2"><button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="uadd"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button></div>
                    <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="POST" action="../functions/insertUser.php">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add User</h3>
                        <div><label for="id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ID</label><input
                                readonly type="text" name="id" id="id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="Automatic" required=""></div>
                        <div><label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Person
                                Name</label><input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="" required="" placeholder="Your Name"></div>
                        <input type="hidden" id="ida" name="ida" value="'.$id.'">
                        <div><label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label><input
                                type="email" name="email" value="" id="email" placeholder="example@email.com"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required=""></div>
                        <div><label for="pass"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label><input
                                type="password" name="pass" value="" id="pass" placeholder="Your Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required=""></div>
                        <div><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="category">Role:</label>
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                name="role" id="role" required>
                                <option selected value="">--Please choose an option--</option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start"></div>
                        </div><button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            User</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="upload" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-full max-w-lg h-full md: h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex justify-end p-2"><button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="upload"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button></div>
                    <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" method="POST" action="../functions/uploadProduct.php"
                        name='form' enctype="multipart/form-data">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Upload Product</h3>
                        <div><label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product
                                Name</label><input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required></div>
                        <div><label for="desc"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label><input
                                type="text" name="desc" id="desc"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required></div>
                        <div><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="category">Category:</label>
                            <select required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                name="category" id="category" required>
                                <option selected value="">--Please choose an option--</option>
                                <option value="Smart Wearables">Smart Wearables</option>
                                <option value="Smart Speakers">Smart Speakers</option>
                                <option value="Smart Kitchen">Smart Kitchen</option>
                                <option value="Smart Doorbells">Smart Doorbells</option>
                                <option value="Smart Lighting">Smart Lighting</option>
                                <option value="Smart TVs">Smart TVs</option>
                            </select>
                        </div>
                        <input type="hidden" id="ida" name="ida" value="'.$id.'">
                        <div><label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price
                                (£)</label><input type="text" name="price" id="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required></div>

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            for="user_avatar">Upload file</label>
                        <input required name='file'
                            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Every
                            product needs a good looking image!</div>

                        <div class="flex justify-between">
                            <div class="flex items-start"></div>
                        </div><button type="submit" name='upload'
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload
                            Product</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="">
            <p class='text-left flex justify-start text-white font-bold text-5xl my-5'>Products List</p>
            <form name='form' method='POST' action='../functions/deleteFunction.php'>
                <div class="inline-flex rounded-md shadow-sm my-2">
                    <button href="#" id="btnd" aria-current="page"
                        class="py-2 px-4 text-sm font-medium text-blue-700 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-rose-500 dark:focus:ring-blue-500 dark:focus:text-white">
                        Delete
                    </button>
                    <a href="#"
                        class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Move
                    </a>
                    <a href="#"
                        class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        Change
                    </a>
                </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $imagename = $row['imagename'];
                            $id2 = $row['id'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $category = $row['category'];

                            echo '<tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                    <input type="hidden" name="imagename" value="'.$imagename.'">
                                        <input id="checkbox-table-'.$id.'" type="checkbox" onclick="checked" name="check_list[]" value="'.$imagename.'"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    '.$name.'
                                </th>
                                <td class="px-6 py-4">
                                    '.$id.'
                                </td>
                                <td class="px-6 py-4">
                                    '.$category.'
                                </td>
                                <td class="px-6 py-4">
                                    £'.$price.'
                                </td>
                                <td class="px-6 py-4 text-right">
                                <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" type="button" data-modal-toggle="'.$id.'">
                                Edit Product
                                </button>
                                </td>
                            </tr>
                            </div>';
                        }
                        
                    ?>
            </tbody>
        </table>
    </div>

    </form>
    <?php 
        
        if($getProductNumber = htmlspecialchars($_GET["del"])){
            echo'<div id="toast-danger" class="absolute bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="ml-3 text-sm font-normal">Item has been deleted.</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>';
        } else{
            echo'<div id="toast-danger" class="hidden absolute bottom-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="ml-3 text-sm font-normal">Product has been deleted.</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>';
        }

        if($getProductNumber = htmlspecialchars($_GET["add"])){
            echo'<div id="toast-success" class="flex absolute bottom-5 right-5 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="ml-3 text-sm font-normal">Product created successfully.</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>';
        }


        
        ?>



    <script type="text/javascript">
    $(document).ready(function() {
        $('#output').html("");
        $(".live_search").keyup(function() {
            var query = $(this).val();
            if (query != "") {
                $.ajax({
                    url: 'search.php',
                    method: 'POST',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#output').html("");
                        $('#output').show();
                        $('#output').html(data);
                        $(".live_search").focusout(function() {

                        });
                        $(".live_search").focusin(function() {
                            var currentQuery = $(this).val();
                            if (currentQuery != "") {
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
    <script src="script3.js">
    </script>
</body>

</html>