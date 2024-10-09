<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="../CSSFolder/output.css">
   <link rel="stylesheet" href="../CSSFolder/index.css">

<!-- ask tutor about edit section 
https://codepen.io/SamaraSsr/pen/pLBZoo -->

   <title>Fertilizer Expense</title>
</head>

<body>
   <div class="wrappper">
      <div class="dashboard">
         <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
            aria-controls="default-sidebar" type="button"
            class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
               xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd"
                  d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
               </path>
            </svg>
         </button>

         <aside id="default-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
               <ul class="space-y-2 font-medium">
                  <li>
                     <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg
                           class="w-5 h-5 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                           aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                           viewBox="0 0 22 21">
                           <path
                              d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                           <path
                              d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                     </a>
                  </li>
                  <li>
                     <a href="mainPage.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-house"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                        <span
                           class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                     </a>
                  </li>
                  <li>
                     <a href="employees.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-user"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Employees</span>
                     </a>
                  </li>
                  <li>
                     <a href="Fertilizer.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-seedling"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Fertilizer</span>
                        <span
                           class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                     </a>
                  </li>
                  <li>
                     <a href="gas.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-gas-pump"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Gas</span>
                     </a>
                  </li>


                  <li>
                     <a href="other.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-money-bill"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Other Expenses</span>
                     </a>
                  </li>
                  <li>
                     <a href="sales.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sales</span>
                     </a>
                  </li>
                  <li>
                     <a href="summary.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Summary</span>
                     </a>
                  </li>
                  <li>
                     <a href="index.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Out</span>
                     </a>
                  </li>
                  <li>
                     <a href="signUp.html"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-user-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                     </a>
                  </li>
               </ul>
            </div>
         </aside>

         <!-- end side bar dashboard-->

         <!-- start main page 4 box -->
         <div class=" sm:ml-64 ">
            <h2 class="py-10 font-bold px-2 md:text-2xl text-[16px] md:text-left text-center">Fertilizer Expense</h2>
            <!-- div below border wrap around the whole box---control main box -->
            <div class="p-8 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

               <!-- control main of 3 small boxes -->
               <div class="grid  xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-2 gap-4 mb-4">

                  <div
                     class="flex flex-col items-center justify-center rounded bg-gray-50 md:h-56 h-48 custumBorderEmployee ">
                     <p class="text-2xl text-gray-400 flex lg:flex-row md:flex-col flex-col items-center space-y-2 ">
                        <i class="fa-solid fa-seedling"></i>
                        <span class="flex-1 md:ms-3 md:text-2xl text-[18px] whitespace-nowrap ">Company A</span>
                     </p>
                     <div class="pt-5 ">
                        <p>$10000</p>
                     </div>
                  </div>

                  <div
                     class="flex flex-col items-center justify-center md:h-56 h-48  rounded bg-gray-50 dark:bg-gray-800 custumBorderFertilizer">
                     <p class="text-2xl text-gray-400 flex lg:flex-row flex-col items-center space-y-2 ">
                        <i class="fa-solid fa-seedling"></i>
                        <span class="flex-1 md:ms-3 md:text-2xl text-[18px]  whitespace-nowrap">Company B</span>
                     <div class="pt-5">
                        <p>$10000</p>
                     </div>
                     </p>
                  </div>
                  <div
                     class="flex flex-col items-center justify-center md:h-56 h-48  rounded bg-gray-50 dark:bg-gray-800 custumBorderGas">
                     <p class="text-2xl text-gray-400 flex lg:flex-row flex-col items-center space-y-2 ">
                        <i class="fa-solid fa-seedling"></i>
                        <span class="flex-1 md:ms-3 md:text-2xl text-[18px]  whitespace-nowrap">Company C</span>
                     <div class="pt-5">
                        <p>$10000</p>
                     </div>
                     </p>
                  </div>

                  <div
                     class="flex flex-col items-center justify-center md:h-56 h-48  rounded bg-gray-50 dark:bg-gray-800 custumBorderGas">
                     <p class="text-2xl text-gray-400 flex lg:flex-row flex-col items-center space-y-2 ">
                        <i class="fa-solid fa-seedling"></i>
                        <span class="flex-1 md:ms-3 md:text-2xl text-[18px]  whitespace-nowrap">Company D</span>
                     <div class="pt-5">
                        <p>$10000</p>
                     </div>
                     </p>
                  </div>
               </div>



<!-- main div wrap 3 buttons and modals -->
<!-- wrap 2 modal div below -->
               <div class="flex md:flex-row flex-col justify-between py-10 md:space-y-0 space-y-5 ">


<!-- Buttton 1--Add new fertilizer Company  Button-->


<!-- Modal toggle -->
<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class=" capitalize md:w-[32%] w-full  py-4 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5  text-center" type="button">
Add new fertilizer supplier
 </button>
 
 <!-- Main modal -->
 <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative p-4 w-full max-w-md max-h-full">
         <!-- Modal content -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
             <!-- Modal header -->
             <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t capitalize">
                 <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                  Add new fertilizer supplier
                 </h3>
                 <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                     </svg>
                     <span class="sr-only">Close modal</span>
                 </button>
             </div>


             <!-- Modal body -->
             <div class="p-4 md:p-5">
                 <form class="space-y-4 pb-5 capitalize" action="../php/addSupplier.php">
                     <div>
                         <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New supplier name</label>
                         <input type="text" name="supplierName" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Supplier name" required />
                     </div>

                     <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone:</label>
                        <input type="tel" name="phoneNumber" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Phone number" required />
                    </div>

                    <div>
                     <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                     <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" required />
                 </div>
                 <div>
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address:</label>
                  <input type="text" name="address" id="" class=" mb-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Address" required />
              </div>
                     
                    
                     <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">Submit</button>
               
                 </form>
             </div>
         </div>
     </div>
 </div> 
 
<!-- Button 2 middle button - Only Add new fertilizer Type  Button-->

<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class=" md:w-[32%] w-full  py-4 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5  text-center" type="button">
   Add new fertilizer type
   </button>
   
   <!-- Main modal -->
   <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
       <div class="relative p-4 w-full max-w-md max-h-full">
           <!-- Modal content -->
           <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                   <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                      Add New Fertlizer
                   </h3>
                   <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                       </svg>
                       <span class="sr-only">Close modal</span>
                   </button>
               </div>
               <!-- Modal body -->
               <form class="p-4 md:p-5" action="addNewFertilizer.php">
                   <div class="grid gap-4 mb-4 grid-cols-2">
                     <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Fertilizer Name</label>
                        <input type="text" name="fertilizerName" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                    </div>
                    <div class="col-span-2">
                     <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                     <input type="text" name="description" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                 </div>
                       <div class="col-span-2">
                           <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier Name</label>


                           <select name="supplierName" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm 
                           rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">

                        <?php
//step 1 connect
$servername = "localhost";
$username = "root";
$password = "";

// step 2Create connection
$conn = new mysqli($servername, $username, $password, "farmData");
//add "farmData" come from xammp - it's name of database completed folder

// step 1Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//die make program stop
//step3 run sql query
$sql = 'select *from supplier';
$result = $conn->query($sql);

// for loop take each row if this username and passward found on the row
//each value is $ row
$found = false;
while($row = $result -> fetch_assoc()){
  echo "<option>".$row["supplierName"];   
   
}
                        ?>
                        
                        
                        </select>


                       </div>
                       <div class="col-span-2 sm:col-span-1">
                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order Date</label>
                          <input type="date" name="orderDate" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                      </div>
  
                      <div class="col-span-2 sm:col-span-1">
                       <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Delivery Date</label>
                       <input type="date" name="deliveryDate" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                   </div>
  
                   <div class="col-span-2 sm:col-span-1">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Date</label>
                    <input type="date" name="paymentDate" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                </div>
  
                <div class="col-span-2 sm:col-span-1">
                 <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Status</label>
                 <input type="text" name="paymentStatus" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
             </div>
                      <div class="col-span-2 sm:col-span-1">
                       <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                       <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                   </div>
                       <div class="col-span-2 sm:col-span-1">
                           <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty</label>
                           <input type="number" name="qty" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                       </div>
                       <div class="col-span-2 sm:col-span-1">
                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                          <input type="text" name="total" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                      </div>
                      
                   </div>
                   <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                       <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                       Add new fertilizer
                   </button>
               </form>
           </div>
       </div>
   </div> 

<!-- section 3 button -add existing/ or reorder existing fertilizer -->

<!-- add existing fertilizer Type  Button-->
<button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class=" md:w-[32%]  w-full  py-4 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5  text-center" type="button">
 Reorder
   </button>
   
   <!-- Main modal -->
   <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
       <div class="relative p-4 w-full max-w-md max-h-full">
           <!-- Modal content -->
           <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                   <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                   Reorder Fertilizer
                   </h3>
                   <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                       </svg>
                       <span class="sr-only">Close modal</span>
                   </button>
               </div>
               <!-- Modal body -->
               <form class="p-4 md:p-5">
                   <div class="grid gap-4 mb-4 grid-cols-2">
                       <div class="col-span-2">
                           <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Name</label>
                           <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                       </div>
                       <div class="col-span-2 sm:col-span-1">
                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order Date</label>
                          <input type="date" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                      </div>
  
                      <div class="col-span-2 sm:col-span-1">
                       <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Delivery Date</label>
                       <input type="date" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                   </div>
  
                   <div class="col-span-2 sm:col-span-1">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Date</label>
                    <input type="date" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                </div>
  
                <div class="col-span-2 sm:col-span-1">
                 <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Status</label>
                 <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
             </div>
                      <div class="col-span-2 sm:col-span-1">
                       <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                       <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                   </div>
                       <div class="col-span-2 sm:col-span-1">
                           <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qty</label>
                           <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                       </div>
                       <div class="col-span-2 sm:col-span-1">
                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total</label>
                          <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                      </div>
                      
                   </div>
                   <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                       <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Submit Reorder
                   </button>
               </form>
           </div>
       </div>
   </div> 






   <!-- close div below wrap 3 buttons and  modal pop up -->
               </div>

               <!-- start  company A -->
               <!-- section below daily products -->

               <div class="mb-4 rounded bg-gray-50">

               
<div class="wraph2EtButton flex justify-between items-center px-5">
                  <h2 class="py-10 font-bold  md:text-xl text-[16px]">Fertilizer Company A Expense</h2>
                  <button class="bg-green-400 py-2 px-5 rounded-lg">Edit</button>
               </div>
                  <div class="wrapDailyExpense">

                     <!-- mainbox wrap all 10 rows -->
                     <div class="grid grid-cols-1 gap-4">
                        <!-- title mainbox innergrid -->

                        <!-- this section hide on the phone --show on computer and ipd - we use block to unhide -->
                        <div class="">
                           <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px] gap-4 onlyShowComputerSize">
                              <div class="">Fertilizer</div>
                              <div class="">Order<br class="block "> Date</div>
                              <div class="">Delivery<br class="block "> Date</div>
                              <div class=" ">Payment<br class="block "> Date</div>
                              <div class="">Payment<br class="block "> Status</div>
                              <div class=" ">Price</div>
                              <div class=" ">Qty</div>
                              <div class=" ">Total</div>
                           </div>
                        </div>

                        <!-- this section hidden for computer nd ipad--only on the phone -->
                        <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px]  onlyShowIpadMini">
                           <div class="">Name<br class="block ">Ferti</div>
                           <div class="">Order</div>
                           <div class="">Deliv<br class="block ">Date</div>
                           <div class=" ">Pay<br class="block ">Date</div>
                           <div class="">Pay<br class="block ">Status</div>
                           <div class=" ">Pay<br class="block ">Price</div>
                           <div class="">Qty</div>
                           <div class=" ">Total</div>
                        </div>

                        <div class="wrapCustume space-y-2 text-center">
                           <!-- div above for scroll bar -->
                           <!-- box row 1 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>

                           <!--start box row 2 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 2 -->

                           <!--start box row 3 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 3 -->

                           <!--start box row 4 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 4 -->

                           <!--start box row 5 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 5 -->

                           <!--start box row 6 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 6 -->

                           <!--start box row 7 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 7 -->

                           <!--start box row 8 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 8 -->

                           <!--start box row 9 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 9 -->
                           <!--start box row 10 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 10 -->

                        </div>
                        <!-- end wrap all 10 boxes -->
                     </div>
                  </div>
                  <!-- end daily product section -->

               </div>
               <!-- div end above end wrapCustum -->

               <!-- end company A -->


               <!-- start  company B -->
      
               <!-- section below daily products -->

               <div class="mb-4 rounded bg-gray-50">

                  <h2 class="py-10 font-bold px-2 md:text-xl text-[16px]">Fertilizer Company B Expense</h2>

                  <div class="wrapDailyExpense">

                     <!-- mainbox wrap all 10 rows -->
                     <div class="grid grid-cols-1 gap-4">
                        <!-- title mainbox innergrid -->

                        <!-- this section hide on the phone --show on computer and ipd - we use block to unhide -->
                        <div class="">
                           <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px] gap-4 onlyShowComputerSize">
                              <div class="">Fertilizer</div>
                              <div class="">Order<br class="block "> Date</div>
                              <div class="">Delivery<br class="block "> Date</div>
                              <div class=" ">Payment<br class="block "> Date</div>
                              <div class="">Payment<br class="block "> Status</div>
                              <div class=" ">Price</div>
                              <div class=" ">Qty</div>
                              <div class=" ">Total</div>
                           </div>
                        </div>

                        <!-- this section hidden for computer nd ipad--only on the phone -->
                        <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px]  onlyShowIpadMini">
                           <div class="">Name<br class="block ">Fertili</div>
                           <div class="">Order</div>
                           <div class="">Deliv<br class="block ">Date</div>
                           <div class=" ">Pay<br class="block ">Date</div>
                           <div class="">Pay<br class="block ">Status</div>
                           <div class=" ">Pay<br class="block ">Price</div>
                           <div class="">Qty</div>
                           <div class=" ">Total</div>
                        </div>

                        <div class="wrapCustume space-y-2 text-center">
                           <!-- div above for scroll bar -->
                           <!-- box row 1 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>

                           <!--start box row 2 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 2 -->

                           <!--start box row 3 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 3 -->

                           <!--start box row 4 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 4 -->

                           <!--start box row 5 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 5 -->

                           <!--start box row 6 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 6 -->

                           <!--start box row 7 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 7 -->

                           <!--start box row 8 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 8 -->

                           <!--start box row 9 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 9 -->
                           <!--start box row 10 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 10 -->

                        </div>
                        <!-- end wrap all 10 boxes -->
                     </div>
                  </div>
                  <!-- end daily product section -->

               </div>
               <!-- div end above end wrapCustum -->

               <!-- end company B -->

               <!-- start  company C -->
               <!-- section below daily products -->

               <div class="mb-4 rounded bg-gray-50">

                  <h2 class="py-10 font-bold px-2 md:text-xl text-[16px]">Fertilizer Company C Expense</h2>

                  <div class="wrapDailyExpense">

                     <!-- mainbox wrap all 10 rows -->
                     <div class="grid grid-cols-1 gap-4">
                        <!-- title mainbox innergrid -->

                        <!-- this section hide on the phone --show on computer and ipd - we use block to unhide -->
                        <div class="">
                           <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px] gap-4 onlyShowComputerSize">
                              <div class="">Fertilizer</div>
                              <div class="">Order<br class="block "> Date</div>
                              <div class="">Delivery<br class="block "> Date</div>
                              <div class=" ">Payment<br class="block "> Date</div>
                              <div class="">Payment<br class="block "> Status</div>
                              <div class=" ">Price</div>
                              <div class=" ">Qty</div>
                              <div class=" ">Total</div>
                           </div>
                        </div>

                        <!-- this section hidden for computer nd ipad--only on the phone -->
                        <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px]  onlyShowIpadMini">
                           <div class="">Name<br class="block ">Fertili</div>
                           <div class="">Order</div>
                           <div class="">Deliv<br class="block ">Date</div>
                           <div class=" ">Pay<br class="block ">Date</div>
                           <div class="">Pay<br class="block ">Status</div>
                           <div class=" ">Pay<br class="block ">Price</div>
                           <div class="">Qty</div>
                           <div class=" ">Total</div>
                        </div>

                        <div class="wrapCustume space-y-2 text-center">
                           <!-- div above for scroll bar -->
                           <!-- box row 1 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>

                           <!--start box row 2 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 2 -->

                           <!--start box row 3 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 3 -->

                           <!--start box row 4 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 4 -->

                           <!--start box row 5 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 5 -->

                           <!--start box row 6 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 6 -->

                           <!--start box row 7 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 7 -->

                           <!--start box row 8 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 8 -->

                           <!--start box row 9 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 9 -->
                           <!--start box row 10 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 10 -->

                        </div>
                        <!-- end wrap all 10 boxes -->
                     </div>
                  </div>
                  <!-- end daily product section -->

               </div>
               <!-- div end above end wrapCustum -->

               <!-- end company c -->

              <!-- start  company D -->
               <!-- section below daily products -->

               <div class="mb-4 rounded bg-gray-50">

                  <h2 class="py-10 font-bold px-2 md:text-xl text-[16px]">Fertilizer Company D Expense</h2>

                  <div class="wrapDailyExpense">

                     <!-- mainbox wrap all 10 rows -->
                     <div class="grid grid-cols-1 gap-4">
                        <!-- title mainbox innergrid -->

                        <!-- this section hide on the phone --show on computer and ipd - we use block to unhide -->
                        <div class="">
                           <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px] gap-4 onlyShowComputerSize">
                              <div class="">Fertilizer</div>
                              <div class="">Order<br class="block "> Date</div>
                              <div class="">Delivery<br class="block "> Date</div>
                              <div class=" ">Payment<br class="block "> Date</div>
                              <div class="">Payment<br class="block "> Status</div>
                              <div class=" ">Price</div>
                              <div class=" ">Qty</div>
                              <div class=" ">Total</div>
                           </div>
                        </div>

                        <!-- this section hidden for computer nd ipad--only on the phone -->
                        <div class="grid grid-cols-8 font-bold text-center lg:text-lg  md:text-[13px] text-[10px]  onlyShowIpadMini">
                           <div class="">Name<br class="block ">Ferti</div>
                           <div class="">Order</div>
                           <div class="">Deliv<br class="block ">Date</div>
                           <div class=" ">Pay<br class="block ">Date</div>
                           <div class="">Pay<br class="block ">Status</div>
                           <div class=" ">Pay<br class="block ">Price</div>
                           <div class="">Qty</div>
                           <div class=" ">Total</div>
                        </div>

                        <div class="wrapCustume space-y-2 text-center">
                           <!-- div above for scroll bar -->
                           <!-- box row 1 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>

                           <!--start box row 2 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 2 -->

                           <!--start box row 3 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 3 -->

                           <!--start box row 4 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 4 -->

                           <!--start box row 5 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 5 -->

                           <!--start box row 6 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 6 -->

                           <!--start box row 7 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 7 -->

                           <!--start box row 8 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 8 -->

                           <!--start box row 9 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 9 -->
                           <!--start box row 10 -->
                           <div
                              class="grid grid-cols-8 text-center md:text-[14px] text-[10px]  py-5 px-2 bg-blue-100  ">
                              <div class="">moon</div>
                              <div class="">10/25</div>
                              <div>10/25</div>
                              <div>1.4</div>
                              <div>1.5</div>
                              <div>10000</div>
                              <div class="">1.7</div>
                              <div class="">1.8</div>
                           </div>
                           <!--  end box row 10 -->

                        </div>
                        <!-- end wrap all 10 boxes -->
                     </div>
                  </div>
                  <!-- end daily product section -->

               </div>
               <!-- div end above end wrapCustum -->

               <!-- end company D -->
            </div>
         </div>



      </div>
   </div>



   <script src="https://kit.fontawesome.com/42d8882816.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
   <script src='../index.js'></script>
</body>

</html>