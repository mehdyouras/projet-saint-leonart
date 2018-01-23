    <footer class="footer bg-secondary pt-4">
        <div class="container">
            <h2 class="sr-only">Pied de page</h2>
            <div class="row pb-4">
                <nav class="col-12 col-md-3">
                    <h3 class="sr-only">Navigation de pied de page</h3>
                    <ul class="list-unstyled list-group list-group-flush text-center">
                        <?php foreach(sla_get_nav_items('header') as $item):
                            $is_active = sla_is_active($item->link, $current_url);
                        ?>
                            <li class="<?php if($is_active) : ?>active<?php endif; ?>">
                                <a class="list-group-item bg-secondary text-uppercase" href="<?= $item->link ?>"><?= $item->label ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <?php if( have_rows('partners', 'option') ): ?>
                <section class="col-12 col-md-4">
                    <h3 class="sr-only">Nos partenaires</h3>
                    <ul class="list-unstyled d-flex justify-content-center">
                        <?php while ( have_rows('partners', 'option') ) : the_row(); ?>
                        <li>
                            <a href="<?php the_sub_field('partner_link'); ?>">
                                <div>
                                    <?= wp_get_attachment_image( get_sub_field('partner_logo'),  'sla_partner_small'); ?>
                                </div>
                                <span class="sr-only"><?php the_sub_field('partner_name'); ?></span>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </section>
                <?php endif; ?>
                <section class="col-12 col-md-5">
                    <h3>S'inscrire à la Newsletter</h3>
                    <?php the_field('newsletter', 'option') ?>
                </section>
            </div>
        </div>
        <section class="bg-primary">
            <div class="container pt-2 pb-2">
                <h3 class="sr-only">Nos réseaux sociaux</h3>
                <ul class="list-unstyled d-flex justify-content-around mb-0">
                    <li>
                        <a class="text-light fab fa-facebook socials--large p-2" href="http://facebook.com"><span class="sr-only">Vers la page Facebook</span></a>
                    </li>
                    <li>
                        <a class="text-light fab fa-twitter socials--large p-2" href="http://twitter.com"><span class="sr-only">Vers la page Twitter</span></a>
                    </li>
                    <li>
                        <a class="text-light fab fa-instagram socials--large p-2" href="http://instagram.com"><span class="sr-only">Vers la page Instagram</span></a>
                    </li>
                </ul>
            </div>
        </section>
        <div class="p-2 text-center footer__rights text-light">
            <p class="mb-0 mx-auto">© 2017 Mehdy Ouras</p>
        </div>
    </footer>
    <script src="<?php sla_asset('js/jquery.slim.min.js'); ?>"></script>
    <script src="<?php sla_asset('js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php sla_asset('js/app.js'); ?>"></script>
</body>
</html>