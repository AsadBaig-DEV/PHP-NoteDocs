<?php
include('partials/header.php');
include('partials/nav.php');
include('partials/banner.php')
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note) : ?>
      <li>
        <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
          <?= $note['body'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </div>
</main>

<?php include('partials/footer.php') ?>