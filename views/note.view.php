<?php
include('partials/header.php');
include('partials/nav.php');
include('partials/banner.php')
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <a href="/notes" class="text-blue-500 hover:underline">Back</a>
    <p><?= $note['body'] ?></p>
  </div>
</main>

<?php include('partials/footer.php') ?>