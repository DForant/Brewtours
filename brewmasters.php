<html lang="en">
    <head>
        <title>Brewtours - Meet the Brewmasters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&display=swap" rel="stylesheet">
        <link href="css/iconfont.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <?php include 'templates/navigation.php'; ?>
                
        <header class="header header--subpage header--subpage-profile">
            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--sub">Meet our Brewmasters</span>
                </h1>
            </div>
        </header>
        
        <main>
            <a href="index.php" class="subpage-navigation__item subpage-navigation__link ">Return Home</a>
            <ul class="breadcrumb">
                <li><a href="about.php">About</a></li>
                <li>Brewmasters</li>
            </ul>            
            <section class="subpage-section">

                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img srcset="img/person3.jpg 600w, img/person3-large.jpg 2000w"
                                sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/person3-large.jpg" 
                                alt="Ron Willis picture" 
                                class="story__img">
                            <figcaption class="story__caption story__caption--brewmaster-1">
                                Ron Willis
                            </figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary margin-bottom-small story__heading">
                                Rons Brew experience spans over 20 years.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, porro, quo, atque, a itaque nemo commodi reiciendis cum provident minima exercitationem dignissimos aspernatur dolor placeat quis dolore est omnis mollitia veritatis eum consectetur fugit iusto animi repudiandae neque molestias quia ducimus eius repellat esse. Quae, quos, ab, libero, qui laboriosam accusantium suscipit porro fugiat nihil eos aperiam deserunt ipsum pariatur.
                            </p>
                        </div>                                                    
                    </div>
                </div>

                <div class="row">
                    <div class="story margin-bottom-small">
                        <figure class="story__shape">
                            <img srcset="img/person4.jpg 600w, img/person4-large.jpg 2000w"
                                sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/person4-large.jpg" 
                                alt="Michael Porter picture" 
                                class="story__img">
                            <figcaption class="story__caption story__caption--brewmaster-2">
                                Michael Porter
                            </figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary margin-bottom-small story__heading">
                                Michael is an accomplished brewer and book author.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, porro, quo, atque, a itaque nemo commodi reiciendis cum provident minima exercitationem dignissimos aspernatur dolor placeat quis dolore est omnis mollitia veritatis eum consectetur fugit iusto animi repudiandae neque molestias quia ducimus eius repellat esse. Quae, quos, ab, libero, qui laboriosam accusantium suscipit porro fugiat nihil eos aperiam deserunt ipsum pariatur.
                            </p>
                        </div>                                                    
                    </div>
                </div>
                <div class="row">
                    <div class="story margin-bottom-small">
                        <figure class="story__shape">
                            <img srcset="img/person5.jpg 600w, img/person5-large.jpg 2000w"
                                sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/person5-large.jpg" 
                                alt="Daryl Whitehead picture" 
                                class="story__img">
                            <figcaption class="story__caption story__caption--brewmaster-3 ">
                                Daryl Whitehead
                            </figcaption>
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary margin-bottom-small story__heading">
                                When Daryl's not rocking out, he's in the brewhouse brewing.
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, porro, quo, atque, a itaque nemo commodi reiciendis cum provident minima exercitationem dignissimos aspernatur dolor placeat quis dolore est omnis mollitia veritatis eum consectetur fugit iusto animi repudiandae neque molestias quia ducimus eius repellat esse. Quae, quos, ab, libero, qui laboriosam accusantium suscipit porro fugiat nihil eos aperiam deserunt ipsum pariatur.
                            </p>
                        </div>                                                    
                    </div>                    
                </div>
            </section>
        </main> 
        
        <?php include 'templates/footer.php'; ?>
        
    </body>
    <script> </script>
</html>
