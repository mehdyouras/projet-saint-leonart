    <footer>
        <h2 class="sr-only">Pied de page</h2>
        <nav>
            <h3 class="sr-only">Navigation de pied de page</h3>
            <ul>
                <?php foreach(sla_get_nav_items('header') as $item):
                    $is_active = sla_is_active($item->link, $current_url);
                ?>
                    <li class="<?php if($is_active) : ?>active<?php endif; ?>">
                        <a href="<?= $item->link ?>"><?= $item->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <?php if( have_rows('about_creators') ): ?>
        <section>
            <h3 class="sr-only">Nos partenaires</h3>
            <ul>
                <?php while ( have_rows('partners', 'option') ) : the_row(); ?>
                <li>
                    <a href="<?php the_sub_field('partner_link'); ?>">
                        <?= wp_get_attachment_image( get_sub_field('partner_logo'),  'sla_portrait_large'); ?>
                        <span class="sr-only"><?php the_sub_field('partner_name'); ?></span>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </section>
        <?php endif; ?>
        <section>
            <h3>S'inscrire à la Newsletter</h3>
        </section>
        <section>
            <h3 class="sr-only">Nos réseaux sociaux</h3>
            <ul>
                <li>
                    <a href="#"><span class="sr-only">Vers la page Facebook</span></a>
                </li>
                <li>
                    <a href="#"><span class="sr-only">Vers la page Twitter</span></a>
                </li>
                <li>
                    <a href="#"><span class="sr-only">Vers la page Instagram</span></a>
                </li>
            </ul>
        </section>
    </footer>
    <script src="<?php sla_asset('js/jquery.slim.min.js'); ?>"></script>
    <script src="<?php sla_asset('js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php sla_asset('js/app.js'); ?>"></script>
</body>
</html>