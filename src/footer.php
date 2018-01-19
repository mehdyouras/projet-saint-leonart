    <footer>
        <h2 class="show-for-sr">Pied de page</h2>
        <nav>
            <h3 class="show-for-sr">Navigation de pied de page</h3>
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
        <section>
            <h3 class="show-for-sr">Nos partenaires</h3>
            <ul>
                <li>
                    <a href="#"><img src="#" alt="Partenaire 1"></a>
                </li>
                <li>
                    <a href="#"><img src="#" alt="Partenaire 1"></a>
                </li>
                <li>
                    <a href="#"><img src="#" alt="Partenaire 1"></a>
                </li>
            </ul>
        </section>
        <section>
            <h3>S'inscrire à la Newsletter</h3>
        </section>
        <section>
            <h3 class="show-for-sr">Nos réseaux sociaux</h3>
            <ul>
                <li>
                    <a href="#"><span class="show-for-sr">Vers la page Facebook</span></a>
                </li>
                <li>
                    <a href="#"><span class="show-for-sr">Vers la page Twitter</span></a>
                </li>
                <li>
                    <a href="#"><span class="show-for-sr">Vers la page Instagram</span></a>
                </li>
            </ul>
        </section>
    </footer>
    <script src="<?php sla_asset('js/jquery.slim.min.js'); ?>"></script>
    <script src="<?php sla_asset('js/what-input.min.js'); ?>"></script>
    <script src="<?php sla_asset('js/foundation.min.js'); ?>"></script>
    <script src="<?php sla_asset('js/app.js'); ?>"></script>
</body>
</html>