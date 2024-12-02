<?= $this->extend("layout/default");?>

<?= $this->section("content")?>
<div class="w-full mt-5 text-2xl">
    <h2>Index</h2>
  </div>
  <?= $this->include("components/taskForm.php");?>
      

  <div class="mt-5 ">
    <h3 class="text-xl">Tasks - <?= count($TaskNotCompleted);?></h3>
    
    <div class="mt-5 flex flex-col gap-3">
        <?php foreach($TaskNotCompleted as $row):?>
      <div x-data="{ open: false }" class="cursor-pointer">
        <div class="bg-middledark w-full h-12 rounded-2xl flex items-center p-2" @click="open = ! open">
          <form action="/updateTaskStatus/<?= $row["id"]?>" method="post">
            <button @click.stop class="border border-2 border-pink text-center rounded-xl w-8 h-8 "></button>
          </form>
          <div class="ml-3 w-full">
            <?= $row["title"]?>
          </div>
          <div class="flex-shrink-0 ">
              <button class="w-8 h-8" >
                <i class="bi" :class="open?'bi-chevron-up':'bi-chevron-down'"  ></i> 
              </button>              
          </div>

        </div>
        <div class="mt-2 pl-3 flex " x-show="open" x-transition>
            <i class="bi bi-arrow-return-right"></i>
            <div class="bg-middledark w-full rounded-2xl ml-1 px-4 pt-2 pb-2">
              <p><?= $row["description"]?></p>
              <div class="flex justify-end">
                <form action="/deleteTask/<?= $row["id"]?>" method="post">
                  <button class="text-pink hover:text-black border border-pink transition hover:bg-pink focus:ring-4 focus:outline-none focus:ring-pink font-medium rounded-lg text-sm px-2 py-1 text-center me-2 mb-2 dark:border-pink dark:text-pink dark:hover:text-black dark:hover:bg-pink dark:focus:ring-pink"><i class="bi bi-trash3"></i> Delete</button>
                </form>
              </div>
              
            </div>
          </div>
      </div>
      <?php endforeach;?>
      

    <div class="mt-5 ">
      <h3 class="text-xl">Completed - <?= count($TaskCompleted);?></h3>
      <div class="mt-5 flex flex-col gap-3">
        <?php foreach($TaskCompleted as $row):?>
        <div x-data="{ open: false }" class="cursor-pointer">
          <div class="bg-middledark w-full h-12 rounded-2xl flex items-center p-2" @click="open = ! open">
            <form action="/updateTaskStatus/<?= $row["id"]?>" method="post">
            <button @click.stop class="border border-2 border-pink bg-pink text-center rounded-xl w-8 h-8 text-black">
              <i class="text-xl bi bi-check-lg"></i>
            </button>
            </form>
            <div class="ml-3 w-full">
              <s><?= $row["title"];?></s>
            </div>
            <div class="flex-shrink-0 ">
              <button class="w-8 h-8" >
                <i class="bi" :class="open?'bi-chevron-up':'bi-chevron-down'"  ></i> 
              </button>              
            </div>
          </div>
          <div class="mt-2 pl-3 flex " x-show="open" x-transition>
            <i class="bi bi-arrow-return-right"></i>
            <div class="bg-middledark w-full rounded-2xl ml-1 px-4 pt-2 pb-2">
              <p><?= $row["description"]?></p>
              <div class="flex justify-end">
                <form action="/deleteTask/<?= $row["id"]?>" method="post">
                  <button class="text-pink hover:text-black border border-pink transition hover:bg-pink focus:ring-4 focus:outline-none focus:ring-pink font-medium rounded-lg text-sm px-2 py-1 text-center me-2 mb-2 dark:border-pink dark:text-pink dark:hover:text-black dark:hover:bg-pink dark:focus:ring-pink"><i class="bi bi-trash3"></i> Delete</button>
                </form>
              </div>
              
            </div>
          </div>
          
        </div>
        <?php endforeach;?>
      </div>
      
    </div>
  </div>
<?= $this->endSection() ?>