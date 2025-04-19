<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="src/css/build.css" rel="stylesheet">
</head>
<body>
   
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <a href="#" class="flex items-center ps-2.5 mb-5">
         <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-6 me-3 sm:h-7">
            <title>LinuxServer</title>
            <path fill="#DA3B8A" d="M6.256.719C.3116 3.7066-1.888 12.1209 1.8164 17.6298h.002a12.0306 12.0306 0 0 0 5.1193 4.5022v-.002c8.7205 4.3354 19.3091-4.3021 16.6433-13.7935-.212-.8906-1.0814-3.8234-3.7424-6.094C18.6023 1.1092 15.6758.6356 13.6294 1.09a.4526.4526 0 0 0-.1485.0644c-.667.4347-1.4822.5953-2.2637.7383a.356.356 0 0 0-.291.3399c-.0107.3518.1813.7607.3125 1.0371.3304.6431.9258 1.0205 1.629 1.1095 2.584.7393 4.5834 3.0838 4.8146 5.8283-1.9676 1.2478-4.6033 1.4143-6.885-.4765-.0361-.03-.072-.0585-.1075-.0899-.7389-.5984-1.8837.3137-1.3887 1.209 1.929 2.527 5.0078 3.4105 7.8421 2.9084-3.1817.5923-7.13 1.0496-10.184-.0176-.7053-1.455-1.7714-2.7333-3.0802-3.6486-.1575-1.5748.2295-3.209 1-4.4982.6043-.926-.7959-1.8365-1.4043-.9356C2.706 5.7782 2.226 7.073 2.0058 8.4087c.019-.1339.0385-.2666.0606-.4004C2.5478 5.1615 3.8621 2.4204 6.256.719Zm10.6684.7187c.047.0044.0606.0113.0606.004.3944.0319.783.2053.8164.4453.0251.1875-.1708.3715-.4355.502a1.873 1.873 0 0 1-.547.168c-.473.0661-.0355-.2467-.078-.5528-.0426-.3062-.5505-.4882-.0762-.5547.1321-.0178.2127-.016.2597-.0118zm-2.8927.4727c.4785.032.4773.4963 0 .5293-.4776-.033-.478-.4973 0-.5293zm-3.9572 4.4768a.6359.6359 0 0 0-.6367.6328v2.1388c.3486-.1712.7823-.1672 1.1876-.0176.5723.3414 1.2689.7013 2.0196.9766a.6359.6359 0 0 0 .5352-.629V7.02a.6362.6362 0 0 0-.6368-.6328Zm-1.8711 3.922a.6362.6362 0 0 0-.6348.6368v2.4688a.6355.6355 0 0 0 .6348.6348h2.4688a.635.635 0 0 0 .6368-.6348v-.1504c-.9005-.518-1.7222-1.2152-2.4064-2.1114l-.0215-.0293-.0175-.0332a1.3752 1.3752 0 0 1-.17-.7813Zm5.0314 0c.6898.1998 1.4073.313 2.1076.2598a.6359.6359 0 0 0-.5098-.2598zm-1.4922 3.1896a.6355.6355 0 0 0 .6211.5508h.7989a8.3544 8.3544 0 0 1-1.42-.5508Z"/>
         </svg>
         <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">localhost</span>
      </a>
      <ul class="space-y-2 font-medium">
         <li>
            <a href="http://localhost/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="phpinfo.php" target="_blank" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>PHP</title>
                  <path fill="#777BB4" d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">PHP</span>
            </a>
         </li>
            <a href="http://localhost/phpmyadmin/" target="_blank" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>phpMyAdmin</title>
                  <path fill="#6C78AF" d="M5.463 3.476C6.69 5.225 7.497 7.399 7.68 9.798a12.9 12.9 0 0 1-.672 5.254 4.29 4.29 0 0 1 2.969-1.523c.05-.004.099-.006.148-.008.08-.491.47-3.45-.977-6.68-1.068-2.386-3-3.16-3.685-3.365Zm1.777.037s2.406 1.066 3.326 5.547c.607 2.955.049 4.836-.402 5.773a7.347 7.347 0 0 1 4.506-1.994c.86-.065 1.695.02 2.482.233-.1-.741-.593-3.414-2.732-5.92-3.263-3.823-7.18-3.64-7.18-3.64Zm14.817 9.701-17.92 3.049a2.284 2.284 0 0 1 1.535 2.254 2.31 2.31 0 0 1-.106.61c.055-.027 2.689-1.275 6.342-2.034 3.238-.673 5.723-.36 6.285-.273a6.46 6.46 0 0 1 3.864-3.606zm-6.213 4.078c-2.318 0-4.641.495-6.614 1.166-2.868.976-2.951 1.348-5.55 1.043C1.844 19.286 0 18.386 0 18.386s2.406 1.97 4.914 2.127c1.986.125 3.505-.822 5.315-1.414 2.661-.871 4.511-.97 6.253-.975C19.361 18.116 24 19.353 24 19.353s-2.11-1.044-5.033-1.72a13.885 13.885 0 0 0-3.123-.34Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">phpMyAdmin</span>
            </a>
         </li>
            <a href="https://github.com/doniputrapratama/localhost-environment-for-ubuntu-linux/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>GitHub</title>
                  <path fill="#181717" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Repository</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <div style="height: 487px;" class="flex flex-col items-center justify-center space-y-4 mb-4 rounded-sm bg-gray-50 dark:bg-gray-800">
         <h1 class="text-3xl font-bold text-black dark:text-gray-500">WELCOME !</h1>
         <p class="text-2xl text-gray-400 dark:text-gray-500 text-center max-w-[80%]">
            Your localhost environment is now fully set up and ready to use. PHP, Apache, MySQL, and phpMyAdmin have been successfully configured. Node.js is also installed, providing full-stack development support. Everything you need is in place. Let's begin your amazing project with joy and creativity today!
         </p>
      </div>


   </div>
</div>

<script src="src/js/build.js"></script>

</body>

</html>