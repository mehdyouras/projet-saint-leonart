<?php
/*
        Template Name: Page du programme
*/
get_header();
?>

<section>
    <header>
        <h2>Programme</h2>
        <div>
            <ol>
                <li>
                    <a href="#">Ven. 28</a>
                </li>
                <li>
                    <a href="#">Sam. 29</a>
                </li>
                <li>
                    <a href="#">Dim. 30</a>
                </li>
            </ol>
            <a class="btn btn-primary" data-toggle="collapse" href="#filter" role="button" aria-expanded="false" aria-controls="collapseExample">
                Filtre
            </a>
            <div class="collapse" id="filter">
                <ul>
                   <li>Artiste</li> 
                   <li>Yo</li> 
                </ul>
            </div>
        </div>
    </header>
    <div>
        <a href="<?php sla_the_permalink_by_title('Artistes'); ?>" class="cta cta__primary">Voir tous les artistes</a>
        <a href="<?php sla_the_permalink_by_title('En pratique'); ?>" class="cta cta__secondary">En pratique</a>
        <ol>
            <li>
                <article>
                    <img src="http://fakeimg.pl/250x100/" alt="">
                    <div>
                        <time>Vendredi 28 à 12h</time>
                        <time>Samedi 29 à 19h</time>
                    </div>
                    <div>
                        <h3>
                            Exposition de Jean Dujardin
                        </h3>
                    </div>
                </article>
            </li>
        </ol>
    </div>
</section>

<?php
get_footer();
?>