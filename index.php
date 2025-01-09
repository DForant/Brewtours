<html lang="en">
    <head>
        <title>Brewtours - A Example Tour/excursion booking website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/35af111d85.js" crossorigin="anonymous"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <?php include 'templates/navigation.php';?>
                
        <header class="header header--home">
            <div class="header__logo-box">
                
                <img srcset="img/logo-1x.gif 600w, img/logo-2x.gif 2000w"
                    sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                    src="img/logo-1x.gif" 
                    alt="Brewtours Logo" 
                    class="header__logo">
            </div>
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--sub">Brewery Tours and Pub Crawls</span>
                </h1>
                <a href="tours.php" class="btn btn--white">Discover Our Tours</a>
            </div>
        </header>
        
        <main>
            <section class="section-about">
                <div class="center-text margin-bottom-big margin-top-huge margin-left-small margin-right-small">
                    <h2 class="heading-secondary">
                        Guided Brewery Tours for the Beer lover in all of us
                    </h2>
                </div>
                <div class="row">
                    <div class="col-1-2">
                            <h3 class="heading-tertiary margin-bottom-small">
                                Explore the best in local craft brewing.
                            </h3>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, eius, molestiae! Temporibus atque perspiciatis provident vitae recusandae consequuntur aliquam ullam in iusto nostrum. Alias ullam a expedita illo nemo in!
                        </p>
                        <h3 class="heading-tertiary margin-bottom-small">
                            All Tours include experienced guide and designated driver. 
                        </h3>                        
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, repellat, dolorum, eligendi omnis. consectetur adipisicing elit. Ducimus, esse voluptates praesentium incidunt laudantium.
                        </p>
                        <a href="about.php" class="btn btn--brown">
                            Learn More &rarr;
                        </a>
                    </div>
                    <div class="col-1-2">
                        <p class="composition">
                            <img srcset="img/beer-1.jpg 300w, img/beer-1-large.jpg 1000w"
                                sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/beer-1-large.jpg" 
                                alt="Photo 1" 
                                class="composition__photo composition__photo--p1">
                            
                            <img srcset="img/beer-2.jpg 300w, img/beer-2-large.jpg 1000w"
                                 sizes="(max-width: 900px) 20vw, (max-width: 900px) 30vw, 300px"
                                src="img/beer-2-large.jpg" 
                                alt="Photo 2" 
                                class="composition__photo composition__photo--p2">
                            
                            <img srcset="img/beer-3.jpg 300w, img/beer-6-large.jpg 1000w"
                                 sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/beer-3-large.jpg" 
                                alt="Photo 3" 
                                class="composition__photo composition__photo--p3">
                        </p>
                    </div>                   
                </div>
            </section>
            
            <section class="section-features">
                <div class="row">
                    <div class="col-1-3">
                        <div class="feature-box">
                            <i class="feature-box__icon fa-solid fa-trophy"></i>
                            <h3 class="heading-tertiary margin-bottom-small">Award winning brewmasters</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, praesentium, delectus ab nisi eaque eius asperiores est ratione repudiandae aspernatur nemo possimus nihil ad minus odit reiciendis aliquid? Et, quisquam!
                            </p>
                            <a href="brewmasters.php" class="btn-text">Meet the brewmasters</a>
                            <a href="guides.php" class="btn-text">Meet Our Guides/Drivers</a>
                            
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="feature-box">
                            <i class="feature-box__icon fa-solid fa-calendar-days"></i>
                            <h3 class="heading-tertiary margin-bottom-small">Book a tour</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, praesentium, delectus ab nisi eaque eius asperiores est ratione repudiandae aspernatur nemo possimus nihil ad minus odit reiciendis aliquid? Et, quisquam!
                            </p>
                            <a href="tours.php" class="btn-text">Available Tours</a>                            
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="feature-box">
                            <i class="feature-box__icon fa-solid fa-house"></i>
                            <h3 class="heading-tertiary margin-bottom-small">Participating brewerys and pubs</h3>
                            <p class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, praesentium, delectus ab nisi eaque eius asperiores est ratione repudiandae aspernatur nemo possimus nihil ad minus odit reiciendis aliquid? Et, quisquam!
                            </p>
                            <a href="breweries.php" class="btn-text">View Our Participating Breweries and Pubs</a>
                        </div>
                    </div>
                </div>                
            </section>
            
            <section class="section-tours">
                <div class="center-text margin-bottom-big">
                    <h2 class="heading-secondary">
                        Most Popular Tours
                    </h2>
                </div> 
                
                <div class="row">
                    <div class="col-1-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <div class="card__heading">
                                    <div class="card__heading-span card__heading-span--1">Boston Pub Crawl</div>
                                </div>
                                <div class="card__details">
                                    <ul>
                                        <li>Walking tour</li>
                                        <li>5 bars</li>
                                        <li>10 drink vouchers</li>
                                        <li>Lunch or Dinner Provided</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back--1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$125</p>
                                    </div>
                                    <a href="#popup-1" class="btn btn--white">Book Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                <div class="card__heading">
                                    <div class="card__heading-span card__heading-span--2">Northern RI Brewery Tour</div>
                                </div>
                                <div class="card__details">
                                    <ul>
                                        <li>Bus Tour</li>
                                        <li>5 brewerys</li>
                                        <li>10 drink vouchers</li>
                                        <li>Lunch or Dinner Provided</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back--2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$65</p>
                                    </div>
                                    <a href="#popup-2" class="btn btn--white">Book Now!</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-1-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                <div class="card__heading">
                                    <div class="card__heading-span card__heading-span--3">Southern RI brewery tour</div>
                                </div>
                                <div class="card__details">
                                    <ul>
                                        <li>Jeep Tour</li>
                                        <li>6 Brewerys</li>
                                        <li>12 drink vouchers</li>
                                        <li>Lunch or Dinner Provided</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__side card__side--back card__side--back--3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$85</p>
                                    </div>
                                    <a href="#popup-3" class="btn btn--white">Book Now!</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                
                <div class="center-text margin-top-huge">
                    <a href="tours.php" class="btn btn--brown">Discover all Tours</a>
                </div>
            </section>
            
            <section class="section-stories">
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="img/170628_001.mp4" type="video/mp4">
                        <source src="img/170628_001.webm" type="video/webm">
                        Your browser is not Supported!
                    </video>
                </div>
                <div class="center-text margin-bottom-big">
                    <h2 class="heading-secondary">
                        What people are saying
                    </h2>
                </div>
                
                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img srcset="img/person1.jpg 600w, img/person1-large.jpg 2000w"
                                 sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/person1-large.jpg" 
                                alt="Person at a table" 
                                class="story__img">
                            <figcaption class="story__caption story__caption--review-1">
                                Mary Smith
                            </figcaption>                            
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary margin-bottom-small story__heading">
                                I have a new appreciation for Craft Beer
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, porro, quo, atque, a itaque nemo commodi reiciendis cum provident minima exercitationem dignissimos aspernatur dolor placeat quis dolore est omnis mollitia veritatis eum consectetur fugit iusto animi repudiandae neque molestias quia ducimus eius repellat esse. Quae, quos, ab, libero, qui laboriosam accusantium suscipit porro fugiat nihil eos aperiam deserunt ipsum pariatur.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img srcset="img/person2.jpg 600w, img/person2-large.jpg 2000w"
                                 sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/person2-large.jpg" 
                                alt="Person at a table" 
                                class="story__img">
                            <figcaption class="story__caption story__caption--review-2">
                                Dwayne Philips
                            </figcaption>
                            
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary margin-bottom-small story__heading">
                                What a great birthday present from my wife 
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, porro, quo, atque, a itaque nemo commodi reiciendis cum provident minima exercitationem dignissimos aspernatur dolor placeat quis dolore est omnis mollitia veritatis eum consectetur fugit iusto animi repudiandae neque molestias quia ducimus eius repellat esse. Quae, quos, ab, libero, qui laboriosam accusantium suscipit porro fugiat nihil eos aperiam deserunt ipsum pariatur.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="center-text margin-top-huge">
                    <a href="reviews.php" class="btn btn--brown">See all reviews</a>
                </div>
            </section>
            
            <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="placeholder.php" class="form">
                                <div class="margin-bottom-medium">
                                    <h2 class="heading-secondary">
                                        Start booking now
                                    </h2>
                                </div> 

                                <div class="form__group margin-bottom-medium">
                                    <input type="text" class="form__input" placeholder="Full Name" id="name" required>
                                    <label for="name" class="form__label">Full Name</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email" id="email" required>
                                    <label for="email" class="form__label">Email Address</label>
                                </div>
                                
                                <div class="form__group">
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="small" name="size">
                                        <label for="small" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Small tour group
                                        </label>
                                    </div>
                                    
                                    <div class="form__radio-group">
                                        <input type="radio" class="form__radio-input" id="large" name="size">
                                        <label for="large" class="form__radio-label">
                                            <span class="form__radio-button"></span>
                                            Large tour group
                                        </label>
                                    </div>                                    
                                </div>
                                
                                <div class="form__group">
                                    <button class="btn btn--brown">
                                        Continue &rarr;
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
                        
        </main>
        
        <?php include 'templates/footer.php'; ?>
                
        <div class="popup" id="popup-1">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/beer-8.jpg" alt="Old Kegs" class="popup__img">
                    <img src="img/beer-9.jpg" alt="Boston Skyline" class="popup__img">
                    
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary margin-bottom-small">Start booking now</h2>
                    <h3 class="heading-tertiary margin-bottom-small">Pub Crawl your way through Boston</h3>
                    <p class="popup__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aspernatur similique totam placeat debitis! Adipisci, modi, minima, quasi maxime itaque neque debitis ab excepturi aperiam numquam pariatur asperiores non nulla esse eligendi odio officia quibusdam. Ipsa, necessitatibus, voluptatibus earum aspernatur laudantium suscipit eos est eius dolorem dolore laborum facere nulla sapiente. Alias, sequi, ex possimus soluta omnis maiores assumenda odio quam veniam vero totam dolorum adipisci unde modi molestias fugiat aspernatur blanditiis ab atque voluptatibus est a quia ullam enim dolores! Accusantium, excepturi, animi, aut architecto ratione adipisci repellat aliquam tempore consequatur unde a quo voluptas labore dolore quae. Assumenda molestias repellat nam a voluptates officiis eos numquam. Reiciendis, praesentium, accusantium, delectus, quis quo libero quas odio accusamus veniam porro ullam ratione expedita! Laboriosam, totam itaque possimus repellendus neque quae libero! Numquam, fugit, aspernatur magnam veritatis ducimus voluptatibus dolorum debitis vero dicta illo at placeat porro quo ex omnis illum?</p>
                    <a href="placeholder.php" class="btn btn--brown">Book Now</a>
                </div>
            </div>
        </div>
        
        <div class="popup" id="popup-2">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/beer-10.jpg" alt="The Guild" class="popup__img">
                    <img src="img/beer-11.jpg" alt="Beer" class="popup__img">
                    
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary margin-bottom-small">Start booking now</h2>
                    <h3 class="heading-tertiary margin-bottom-small">Brews in "The Bucket"</h3>
                    <p class="popup__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aspernatur similique totam placeat debitis! Adipisci, modi, minima, quasi maxime itaque neque debitis ab excepturi aperiam numquam pariatur asperiores non nulla esse eligendi odio officia quibusdam. Ipsa, necessitatibus, voluptatibus earum aspernatur laudantium suscipit eos est eius dolorem dolore laborum facere nulla sapiente. Alias, sequi, ex possimus soluta omnis maiores assumenda odio quam veniam vero totam dolorum adipisci unde modi molestias fugiat aspernatur blanditiis ab atque voluptatibus est a quia ullam enim dolores! Accusantium, excepturi, animi, aut architecto ratione adipisci repellat aliquam tempore consequatur unde a quo voluptas labore dolore quae. Assumenda molestias repellat nam a voluptates officiis eos numquam. Reiciendis, praesentium, accusantium, delectus, quis quo libero quas odio accusamus veniam porro ullam ratione expedita! Laboriosam, totam itaque possimus repellendus neque quae libero! Numquam, fugit, aspernatur magnam veritatis ducimus voluptatibus dolorum debitis vero dicta illo at placeat porro quo ex omnis illum?</p>
                    <a href="placeholder.php" class="btn btn--brown">Book Now</a>
                </div>
            </div>
        </div>

        <div class="popup" id="popup-3">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/beer-12.jpg" alt="Whalers Brewery" class="popup__img">
                    <img src="img/beer-13.jpg" alt="Beer" class="popup__img">
                    
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary margin-bottom-small">Start booking now</h2>
                    <h3 class="heading-tertiary margin-bottom-small">Beaches, Jeeps, and Brews</h3>
                    <p class="popup__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aspernatur similique totam placeat debitis! Adipisci, modi, minima, quasi maxime itaque neque debitis ab excepturi aperiam numquam pariatur asperiores non nulla esse eligendi odio officia quibusdam. Ipsa, necessitatibus, voluptatibus earum aspernatur laudantium suscipit eos est eius dolorem dolore laborum facere nulla sapiente. Alias, sequi, ex possimus soluta omnis maiores assumenda odio quam veniam vero totam dolorum adipisci unde modi molestias fugiat aspernatur blanditiis ab atque voluptatibus est a quia ullam enim dolores! Accusantium, excepturi, animi, aut architecto ratione adipisci repellat aliquam tempore consequatur unde a quo voluptas labore dolore quae. Assumenda molestias repellat nam a voluptates officiis eos numquam. Reiciendis, praesentium, accusantium, delectus, quis quo libero quas odio accusamus veniam porro ullam ratione expedita! Laboriosam, totam itaque possimus repellendus neque quae libero! Numquam, fugit, aspernatur magnam veritatis ducimus voluptatibus dolorum debitis vero dicta illo at placeat porro quo ex omnis illum?</p>
                    <a href="placeholder.php" class="btn btn--brown">Book Now</a>
                </div>
            </div>
        </div>

    </body>

    <script> </script> 

</html>
