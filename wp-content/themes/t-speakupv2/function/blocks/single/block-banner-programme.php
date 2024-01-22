<section class="kl-sect-banner-programme">
    <?php if(get_field('banniere_detail_programme')): ?>
        <img class="img-fluid" src="<?= get_field('banniere_detail_programme')['url']; ?>" alt="<?= get_field('banniere_detail_programme')['title']; ?>">
    <?php endif; ?>
</section>