<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-lime-100">
<nav class="bg-fuchsia-200">
<?php

session_start();
echo" <MArquee>  <strong>WELCOME!!!</strong> </MArquee> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];


?></nav>    

<br><br><br><br><br>
    <div class="">
        <h1 class="text-3xl text-center font-bold text-blue-700 py-8">MBA Study Materials</h1>
        <div class="ml-72">
        <a href="mba book.pdf">
    <button class="btn  bg-orange-400 text-white ml-96 h-12 text-xl rounded-md px-10 ">
    MBA BOOK-1 <br>
    </button></a>
    <br><br>
    <a href="mca book.pdf">
    <button class="btn  bg-orange-400 text-white ml-96 h-12 text-xl rounded-md px-10">
    MBA BOOK-2 <br></a></div>
    <br><br>
    <!-- <h1 class="text-xl underline decoration-wavy text-pink-700 font-semibold text-center ">For Other Pdf go  through this link:</h1>
    <br>
   
    <a  class=" text-blue-600 text-center pl-96 ml-44 underline" href="https://www.aandmedu.in/course/online-pgcet-coaching-classes-mba/">*https://www.aandmedu.in/course/online-pgcet-coaching-classes-mba/</a>
    <br><br>
    <h1 class="text-xl underline decoration-wavy text-rose-500 font-semibold text-center ">To watch tutorials and to get notes click on this:</h1><br>
    <a  class="underline text-blue-600 text-center pl-96 ml-44" href="https://mbakarlo.com/mba-cet-study-material//">*https://mbakarlo.com/mba-cet-study-material/</a> -->
    </div>  
</body>
</html>