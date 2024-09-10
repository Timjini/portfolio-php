<div class="card-container flex flex-row flex-wrap justify-center items-center">
         <?php foreach ($cards as $card): ?>
         <a href="project.php?slug=<?php echo htmlspecialchars($card['slug']); ?>" class="card p-2 hover:animate-pulse">
            <img class="object-cover lg:w-[550px] lg:h-[367px] card-image" src="<?php echo htmlspecialchars($card['image']); ?>" alt="Card image">
            <div class="card-body flex flex-row justify-between m-2">
               <h2 class="card-title"><?php echo htmlspecialchars($card['title']); ?></h2>
               <span class="arrow hover:animate-bounce material-symbols-outlined">
               call_made
               </span>
            </div>
         </a>
         <?php endforeach; ?>
</div>