    <?php
    $currentPage = $_SERVER['REQUEST_URI'];
    
    ?>

    <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>
            <div class="navigation__background">&nbsp;</div>
            
            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <?php
                    if ($currentPage != '/index.php' && $currentPage != '/'){
                    ?>
                        <li class="navigation__item"><a href="index.php" class="navigation__link">Return Home</a></li>
                    <?php
                    }
                    ?>
                    <li class="navigation__item"><a href="about.php" class="navigation__link">About Brewtours</a></li>
                    <li class="navigation__item"><a href="tours.php" class="navigation__link">View All Tours</a></li>
                    <li class="navigation__item"><a href="reviews.php" class="navigation__link">Reviews</a></li>
                </ul>
            </nav>
        </div>