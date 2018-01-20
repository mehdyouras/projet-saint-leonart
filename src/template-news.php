<?php 
/*
        Template Name: Page des actus
*/
    get_header();
?>

<section>
    <h2>Actualité</h2>
    <div>
        <div>
            <div id="headingOne">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Catégories
                </button>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div>
                    <ul>
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
            <div id="headingTwo">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Année de publication
                </button>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div>
                    <ul>
                        <li>Test</li>
                        <li>Test</li>
                        <li>Test</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div>
            <article>
                <time>22/09</time>
                <h3>Une expo dans le quartier</h3>
                <a href="#" class="readmore">En savoir plus</a>
            </article>
        </div>
    </div>
</section>

<?php get_footer(); ?>