<?php 
/*
        Template Name: Page de contact
*/
    get_header();
?>

<section>
    <header>
        <h2>Contact</h2>
    </header>
    <div>
        <section>
            <h3>Pourquoi nous contacter ?</h3>
            <p><?php the_field('contact_why'); ?></p>
        </section>
        <article>
            <h3>Coordonnées de l'ASBL Lencreuse</h3>
            <address>
                <span class="d-block"><?php the_field('infos_contact_manager','option'); ?></span>
                <span class="d-block"><?php the_field('infos_contact_address','option'); ?></span>
                <span class="d-block"><?php the_field('infos_contact_postal','option'); ?></span>
                <span class="d-block"><?php the_field('infos_contact_phone','option'); ?></span>
                <span class="d-block"><?php the_field('infos_contact_email','option'); ?></span>
            </address>
        </article>
        <section>
            <h3>Nous contacter</h3>
            <?php the_field('contact_form'); ?>
        </section> 
        <a href="#" class="cta cta__secondary">Programme 2018</a>
    </div>
</section>

<?php get_footer(); ?>