<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio | Moussa Samaké</title>
        <meta name="description" content="Le portofolio de l'informaticien
            Malien Moussa Samaké">
        <link rel="icon" href="images/favicon/fini_logo_r.ico"
            type="image/x-icon">
        <link rel="stylesheet" href="local/font/css/all.min.css">
        <script src="local/font/js/all.min.js"></script>
        <script src="local/jqlocal.js"></script>
        <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin:0;
            --bg_anima_anime:rgb(250, 249, 249);
            --bg_anima_border:rgb(237, 215, 11);
            --bg_anima:rgb(54, 50, 50);
            --bg_body:#f6f0f0;
        }
        .loader{
            position: fixed;
            z-index: 100;
            width: 100%;
            height: 100vh;
            background-color: var(--bg_anima_anime);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .load{
            width: 100px;
            height: 100px;
            border: 4px solid var(--bg_anima_border);
            border-radius: 50%;
            position: relative;
        }
      
        .load::after{
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            animation: rotation 1.5s linear infinite;
            border-radius: 50% 50% 50% -2px;
            background-color: var(--bg_anima_anime);
        }
        @keyframes rotation {
            0%{
                transform:rotate(0deg);
            }
            100%{
                transform:rotate(360deg);
            }
        }
        input[type="radio"]{
            display: none;
        }
        .body{
            width: 100%;
            height: 100vh;
            background-color: var(--bg_body);
            overflow: hidden;
        }
        .lateral{
            position: absolute;
            z-index: 2;
            width: 10%;
            height: 100%;
            background-color: var(--bg_anima_anime);
        }
        .lateral .div_p{
            width: 100%;
            height: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
        }
        .lateral p{
          opacity: 0;
          animation: anime_lateral 1.5s ease forwards;
          animation-delay: calc(.6s * var(--i));
            margin: 10px;
            width: 50px;
            height: 50px;
            background-color: var(--bg_anima);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
        }
        .lateral p img{
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }
        .lateral p:hover{
            transition: .2s ease;
            border-radius: 5px;
            cursor: pointer;
            filter: blur(1px);
            background-color:  var(--bg_anima);
        }
        .lateral_body{
            z-index: 1;
            margin-left: 10%;
            display: flex;
            width: 360%;
            height: 100%;
            background-color: var(--bg_anima);
            overflow-y: auto;
        }
        .lateral_body .home,
        .lateral_body .prestation,
        .lateral_body .about,
        .lateral_body .contact
        {
            width: 25%;
            height: 100%;
        }
        .lateral_body .home .home_text.active{
            transition: 2s;
            filter: blur(0);
            transform: translateX(0);
        }
        .lateral_body .home .home_image.active{
            transition: 2s;
            filter: blur(0);
            transform: translateY(0);
        }
        .lateral_body .prestation,
        .lateral_body .contact{
            text-align: center;
            align-items: center;
            padding: 10px;
            height: 100%;
        }
        .lateral_body .home{
            display: flex;
            text-align: center;
            align-items: center;
            padding: 10px;
            height: 100%;
            color: white;
        }
        .lateral_body .about{
            display: flex;
            text-align: center;
            align-items: center;
            padding: 10px;
            height: 100%;
            color: white;
        }
    
       .lateral_body .home .home_text h1{
            text-align: left;
            padding: 10px;
            margin: 10px 0;
            height: auto;
       }
       .lateral_body .home .home_text h1 span{
            background: linear-gradient(to bottom left,var(--bg_anima_border),#c73838,var(--bg_anima_border));
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            transform-origin:top
        }
       .lateral_body .home .home_text h1 span::after{
        content: '';
        letter-spacing: 2px;
        animation: change-text 4s infinite;
        border-right: 4px solid var(--bg_anima_border);
    }
   
    #home:checked ~ .home {
        margin-left: 0;
    }
    #prestation:checked ~ .home {
        margin-left: -25%;
    }
    #about:checked ~ .home {
        margin-left: -50%;
    }
    #contact:checked ~ .home {
        margin-left: -75%;
    }
    
    @keyframes change-text {
        0%   { content: ' '; }
        20%   { content: 'M'; }
        25%   { content: 'Mo'; }
        30%   { content: 'Mou'; }
        35%   { content: 'Mous'; }
        40%   { content: 'Mouss'; }
        45%   { content: 'Moussa'; }
        50%   { content: 'Mouss'; }
        55%   { content: 'Mous'; }
        60%   { content: 'Mou'; }
        65%   { content: 'Mo'; }
        70%   { content: 'M'; }
        100%   { content: ''; }
    
        }
        .lateral_body .home .home_text,
        .lateral_body .home .home_image{
            flex: 1;
        }
        .lateral_body .home .home_text{
            filter: blur(5px);
            transform: translateX(-100%);
        }
        .lateral_body .home .home_image{
            animation: img_anime 4.2s ease-in-out forwards infinite;
            filter: blur(5px);
            transform: translateY(-100%);
        }
        @keyframes img_anime {
            0%{
               transform: translate(15px, 10px); 
            }
            50%{
               transform: translate(20px, 20px); 
            }
            100%{
               transform: translate(0, 0); 
            }
        }
        .lateral_body .home .home_image img{
            width: 70%;
            height: 600px;
        }

        @keyframes anime_lateral {
            0% {
                transform: translateY(100px);
                opacity: 0;
            }
        
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        .prestation{
            color: white;
        }
        .contact{
            color: black;
          background-color: var(--bg_body);
        }
        .contact section{
            color: black;
            width: 40%;
            padding: 10px;
            box-shadow: 2px 2px 3px 1px black;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 11px;
            filter: blur(5px);
            transform: translateX(-100%);
            transition: .2s;
            visibility: hidden;
        }
        .contact section.active{
            visibility: visible;
            filter: blur(0);
            transform: translateX(0);
        }
        .contact p{
            margin-top: 2vh;
           margin-bottom: 10vh;
        }
        .contact section img{
            width: 80px;
            height: 80px;
        }
        .contact section a{
            color: black;
            font-family: sans-serif;
            font-size: 18px;
            text-decoration: none;
        }
        .contact section a:hover{
            background-color: rgba(0, 0, 0, 0.1);
        }
        





/*smal screen*/
        @media screen and (max-width:850px) {
            .body{
                overflow: hidden;
                width: 100%;
                height: 100vh;
            }
            .lateral{
            position: absolute;
            z-index: 2;
            bottom: 0;
            background-color: var(--bg_anima_anime);
                width: 100%;
                height: 10%;
            }
            .lateral .div_p{
                width: 100%;
                height: 100%;
              display: flex;
              justify-content: center;
              align-items: center;
              flex-direction: row;
            }
            .lateral p{
                padding: 10px;
                margin: 10px;
            }
            .lateral p:hover{
                transition: .2s ease;
                border-radius: 5px;
            }
            .lateral a{
               color: white;
            }
            .lateral_body{
                z-index: 1;
                margin-bottom: 10%;
                margin-left: 0;
                display: flex;
                width: 400%;
                height: 90%;
                overflow-y: auto;
            }
            .lateral_body .home,
            .lateral_body .prestation,
            .lateral_body .about,
            .lateral_body .contact{
                width: 25%;
                height: 100%;
            }
           
             .lateral_body .home{
                text-align: center;
                display: flex;
                flex-direction: column;
                padding: 10px;
                height: 100%;
            }
            .lateral_body .home .home_text,
            .lateral_body .home .home_image{
                width: calc(100% - 10px);
            }
            .lateral_body .home .home_image img{
                width: 80%;
                height: 90%;
            }
            .contact section{
                width: 80%;
                visibility: hidden;
                transform: translateX(-100px);
                height: auto;
            }
            .contact section.active{
                visibility: visible;
                filter: blur(0);
                transform: translateX(0);
            }
            
        }

    </style>
    </head>
    <body>
        <!-- loader -->
        <div class="loader">
            <div class="load"></div>
        </div>
        <!-- div principal -->

        <div class="body">
            <!-- bare lateral -->
            <div class="lateral">
                <div class="div_p">

                    <label for="home">
                        <p style="--i:1;">
                            <i class="fa fa-home"></i>
                        </p>
                    </label>
                    <label for="prestation">
                        <p style="--i:2;">
                            <img src="images/service-clients.png" alt="">
                        </p>
                    </label>
                    <label for="about">
                        <p style="--i:3;">
                           <img src="images/agent-de-service-a-la-clientele.png" alt="">
                        </p>
                    </label>
                    <label for="contact">
                        <p style="--i:4;">
                            <img
                                src="images/phone.png"
                                alt="">
                        </p>
                    </label>
                </div>

            </div>

            <!-- div dinamique -->
            <div class="lateral_body">

                <input type="radio" checked name="changed_input" id="home">
                <input type="radio" name="changed_input" id="prestation">
                <input type="radio" name="changed_input" id="about">
                <input type="radio" name="changed_input" id="contact">

                <!-- homme -->
                <div class="home">
                    <div class="home_text" id="anime_left">
                        <h1>Salut, je m'appel <span></span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Illum fugit quidem nobis quos fuga iusto
                            atque, doloremque impedit vel praesentium. Ea eaque
                            tempora inventore id harum, dolorem fugit quaerat
                            ab.</p>
                    </div>

                    <div class="home_image" id="anime_top">
                        <img src="images/Gallery_1682594360172.png" alt="">
                    </div>
                </div>
                <!-- prestation -->
                <div class="prestation">
                    <h1>prestation</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Illum fugit quidem nobis quos fuga iusto
                        atque, doloremque impedit vel praesentium. Ea eaque
                        tempora inventore id harum, dolorem fugit quaerat
                        ab.</p>
                 
                </div>
                <!-- about -->
                <div class="about">
                    <h1 id="anime_left">About</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Illum fugit quidem nobis quos fuga iusto
                        atque, doloremque impedit vel praesentium. Ea eaque
                        tempora inventore id harum, dolorem fugit quaerat
                        ab.</p>
                </div>
                <!-- contact -->
                <div class="contact">
                    <h1 class="titre" id="anime_left">Nos contacts</h1>
                    <p>
                        Vous pouvez nous contacter en cliquant sur les liens
                        ci-dessous.
                    </p>
                    <!-- whatsapp -->
                    <section class="section">
                        <img
                            src="images/WhatsApp.png"
                            width="100%" height="100%" alt="">
                        <a href="https://wa.me/message/PTN4ZL35FYLXN1" target="new_blank">Cliquez ici</a>
                    </section>
                    <!-- tiktok -->
                    <section class="section">
                        <img
                            src="images/TikTok.png"
                            width="100%" height="100%" alt="">
                        <a href="https://www.tiktok.com/@s_moussa?_t=8c32Y9pJSRK&_r=1" target="new_blank">Cliquez ici</a>
                    </section>
                    <!-- facebook -->
                    <section class="section">
                        <img
                            src="images/facebook.png"
                            width="100%" height="100%" alt="">
                        <a href="https://www.facebook.com/Rtechbamako" target="new_blank">Cliquez ici</a>
                    </section>
                    <!-- gmail -->
                    <section class="section">
                        <img
                            src="images/gmail.png"
                            width="100%" height="100%" alt="">
                        <a href="mailto:rtechbamako@gmail.com">Cliquez ici</a>
                    </section>

                </div>

            </div>

        </div>



        <script>
            $(window).on('load',function(){
               $('.loader').fadeOut(3000);
            });

 const anime_left=document.querySelectorAll('#anime_left');
 const anime_top=document.querySelectorAll('#anime_top');
 const section=document.querySelectorAll('.section');
              
                const observer=new IntersectionObserver(obs=>{
                    obs.forEach(ob=>{
                        if(ob.isIntersecting){
                            ob.target.classList.add('active');
                        }else{
                            ob.target.classList.remove('active');
                        }
                    });
                });
                const observer1=new IntersectionObserver(obs=>{
                    obs.forEach(ob=>{
                        if(ob.isIntersecting){
                            ob.target.classList.add('active');
                        }else{
                            ob.target.classList.remove('active');
                        }
                    });
                },{
                    threshold:1,
                });

                anime_left.forEach(anime_lefts=>{
                    observer.observe(anime_lefts);
                });
                
                anime_top.forEach(anime_lefts=>{
                    observer.observe(anime_lefts);
                });
                section.forEach(anime_lefts=>{
                    observer1.observe(anime_lefts);
                });

           
        </script>
    </body>
</html>
