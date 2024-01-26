<?php
loadPartial("head");
loadPartial("navbar");
?>

<section class="flex-auto flex justify-center align-center">
  <div class="container grow-0 mx-auto p-4 my-4">
    <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3"><?= $status ?></div>
    <p class="text-center text-2xl mb-4"><?= $message ?></p>
  </div>
</section>

<?php
loadPartial("footer");
?>