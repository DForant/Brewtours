<html lang="en">
    <head>
        <title>Brewtours - What Others are saying</title>
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
                    <span class="heading-primary--sub">What Others Are Saying</span>
                </h1>
            </div>
        </header>
        
        <main>     
            <a href="index.php" class="subpage-navigation__item subpage-navigation__link ">Return Home</a>       
            <section class="subpage-section">
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
                
                <div class="row">
                    <div class="story">
                        <figure class="story__shape">
                            <img srcset="img/person9.jpg 600w, img/person9-large.jpg 2000w"
                                 sizes="(max-width: 900px) 20vw, (max-width: 600px) 30vw, 300px"
                                src="img/person9-large.jpg" 
                                alt="Person at a table" 
                                class="story__img">
                            <figcaption class="story__caption story__caption--review-2">
                                Nancy White
                            </figcaption>
                            
                        </figure>
                        <div class="story__text">
                            <h3 class="heading-tertiary margin-bottom-small story__heading">
                                A must do if you want to try some of the best beer in the world 
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
