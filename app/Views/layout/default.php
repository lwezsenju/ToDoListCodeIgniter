<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            middledark: '#21212b',
            lightdark:"#272732",
            dark:"#181820",
            white:"#bcbcbf",
            pink:"#fc76a1",
          }
        }
      }
    }
  </script>
</head>
<body class="min-h-screen w-screen flex flex-col dark:bg-dark dark:text-white">
<!-- https://dribbble.com/shots/15185058-Collection-Tasks -->

<?= $this->include('layout/header') ?>
<content class="container max-w-screen-lg mx-auto">
  <?= $this->renderSection('content') ?>
</content>


</body>
</html>