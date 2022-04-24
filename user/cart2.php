<?php
include('../components/connection.php');
session_start();
$cart = $_SESSION['cart'];
$subCost = 0;
$totalCost = 0;
$currentUser = $_SESSION['user'];
$clength = count($cart);

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
    <link href="style2.css" rel='stylesheet' />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body class='bg-slate-600'>
    <?php include('../components/navbar.php'); ?>
    <div class="h-screen bg-gray-300">
        <div class="py-12">
            <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg md:max-w-5xl">
                <div class="md:flex ">
                    <div class="w-full p-4 px-5 py-5">
                        <div class="md:grid md:grid-cols-2 gap-2">
                            <div class="col-span-2 p-5">
                                <h1 class="text-xl font-medium ">Shopping Cart</h1>

                                <?php
                            foreach ($cart as $item) {
                                $sql = "SELECT * FROM products WHERE imagename = '$item'";
                                $res = $conn->query($sql);
                                $row = $res->fetch_assoc();
                                $name = $row['name'];
                                $price = $row['price'];
                                $idn = $row['id'];
                                $desc = $row['description'];
                                $imagename = $row['imagename'];
                                $subCost += $price;
                                $totalCost = $subCost + 10;

                                echo'<div class="flex items-center pt-6 mt-6 border-t">
                                <form action="../functions/delFromCart.php" method="POST">
                                <input type="hidden" name="email" value="'.$imagename.'">
                                <div> <button type="submit" class="mr-6 text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">X</button> </div> 
                                </form>
                                <div class="flex items-center"> <img src="../assets/'.$imagename.'.png" width="125" class="rounded-lg ">
                                        <div class="flex flex-col ml-3 "> <span class="text-md font-medium w-auto">'.$name.'</span> <span class="text-xs font-light text-gray-400">#'.$idn.'</span> </div>
                                    </div>
                                    <div class="flex justify-center items-center">
                                    </div>
                                    <input type="hidden" name="email" value="'.$imagename.'">
                                     <div class="mx-auto mr-0 flex">£'.$price.'</div>
                                </div>';
                            }
                    ?>






                                <div class="flex justify-between items-center mt-6 pt-6 border-t"></div>
                            </div>
                        </div>
                        <div class="pt-6 flex">
                            <div class="mx-auto flex">
                                <div class="w-full md:w-96 md:max-w-full mx-auto">
                                    <div class="p-6 border border-gray-300 sm:rounded-md">
                                        <form method="POST"
                                            enctype="multipart/form-data">
                                            <label class="block mb-6">
                                                <span class="text-gray-700">Address line 1</span>
                                                <input name="address1" type="text" class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          " placeholder="" />
                                            </label>
                                            <label class="block mb-6">
                                                <span class="text-gray-700">Address line 2</span>
                                                <input name="address2" type="text" class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          " placeholder="" />
                                            </label>
                                            <label class="block mb-6">
                                                <span class="text-gray-700">City</span>
                                                <input name="city" type="text" class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          " placeholder="" />
                                            </label>
                                            <label class="block mb-6">
                                                <span class="text-gray-700">Zip/Postal code</span>
                                                <input name="zip" type="text" class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          " placeholder="" />
                                            </label>
                                            <label class="block mb-6">
                                                <span class="text-gray-700">Delivery information</span>
                                                <textarea name="message" class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          " rows="1" placeholder="Floor/DoorLock Code"></textarea>
                                            </label>
                                    </div>
                                    </form>
                                </div>

                            </div>
                            <div class=" w-[23rem] mx-auto mr-5 h-min p-5 bg-gray-800 rounded overflow-visible"> <span
                                    class="text-xl font-medium text-gray-100 block pb-3">Card Details</span> <span
                                    class="text-xs text-gray-400 ">Card Type</span>
                                <div class="overflow-visible flex justify-between items-center mt-2">
                                    <div class="rounded w-52 h-28 bg-gray-500 py-2 px-4 relative right-10"> <span
                                            class="italic text-lg font-medium text-gray-200 underline">VISA</span>
                                        <div class="flex justify-between items-center pt-4 "> <span
                                                class="text-xs text-gray-200 font-medium">****</span> <span
                                                class="text-xs text-gray-200 font-medium">****</span> <span
                                                class="text-xs text-gray-200 font-medium">****</span> <span
                                                class="text-xs text-gray-200 font-medium">****</span> </div>
                                        <div class="flex justify-between items-center mt-3"> <span
                                                class="text-xs text-gray-200"><?php echo $_SESSION['name']; ?></span>
                                            <span class="text-xs text-gray-200">12/18</span> </div>
                                    </div>
                                    <div class="flex justify-center items-center flex-col"> <img
                                            src="https://img.icons8.com/color/96/000000/mastercard-logo.png" width="40"
                                            class="relative right-5" /> <span
                                            class="text-xs font-medium text-gray-200 bottom-2 relative right-5">mastercard.</span>
                                    </div>
                                </div>
                                <div class="flex justify-center flex-col pt-3"> <label
                                        class="text-xs text-gray-400 ">Name on Card</label> <input type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="<?php echo $_SESSION['name']; ?>"> </div>
                                <div class="flex justify-center flex-col pt-3"> <label
                                        class="text-xs text-gray-400 ">Card Number</label> <input type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="**** **** **** ****"> </div>
                                <div class="grid grid-cols-3 gap-2 pt-2 mb-3">
                                    <div class="col-span-2 "> <label class="text-xs text-gray-400">Expiration
                                            Date</label>
                                        <div class="grid grid-cols-2 gap-2"> <input type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="mm"> <input type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                                placeholder="yyyy"> </div>
                                    </div>
                                    <div class=""> <label class="text-xs text-gray-400">CVV</label> <input type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="xxx"> </div>
                                </div> <button id='cartButton'
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Check
                                    Out</button>
                                    
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex justify-between items-center mt-6 pt-6 border-t">
                    <div class="flex items-center mx-auto mb-5 ml-12"> <i class="fa fa-arrow-left text-sm pr-2"></i>
                        <span class="text-md font-medium text-blue-500">Continue Shopping</span> </div>
                    <div class="flex justify-center  items-end mx-auto mb-5 mr-12"> <span
                            class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span> <span
                            class="text-lg mt-1 font-bold text-gray-800 "> £<?php echo $subCost ?></span> </div>
                </div>

            </div>

        </div>

    </div>

    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#cartLoading').hide();
        $('#cartButton').click(function() {
            $('#cartButton').replaceWith(`<button id='#cartLoading' disabled type="button" class="py-2.5 px-5 mr-2 w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
    <svg role="status" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
    </svg>
    Please Wait...
</button>`);
        })
        $('#showModal').trigger("click");
        $('#arlo').hover(function() {
            console.log('oof');
            $('#arlo1').css("--tw-bg-opacity", "1");
            $('#arlo1').css("--tw-scale-x", "1.05");
            $('#arlo1').css("--tw-scale-y", "1.05");
            $('#arlo1').css("transform",
                "translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))"
                );
        }, function() {
            $('#arlo1').css("--tw-bg-opacity", "0.6");
            $('#arlo1').css("--tw-scale-x", "1");
            $('#arlo1').css("--tw-scale-y", "1");
        })

        $('#lifx').hover(function() {
            console.log('oof');
            $('#lifx1').css("--tw-bg-opacity", "1");
            $('#lifx1').css("--tw-scale-x", "1.05");
            $('#lifx1').css("--tw-scale-y", "1.05");
            $('#lifx1').css("transform",
                "translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))"
                );
        }, function() {
            $('#lifx1').css("--tw-bg-opacity", "0.6");
            $('#lifx1').css("--tw-scale-x", "1");
            $('#lifx1').css("--tw-scale-y", "1");
        })

        $('#output').html("");
        $(".live_search").keyup(function() {
            var query = $(this).val();
            if (query != "") {
                $.ajax({
                    url: '../components/search.php',
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
</body>

</html>