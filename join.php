<?php require 'pages/header.php'; ?>



<section class="join-1" data-aos="zoom-in-up" data-aos-duration="3000">
    <div>
        <p>Why should you be 
        a part of this?</p>
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 24 24" style="margin-right: 5px;"><g fill="none" stroke="#F8F8F8" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.55"><rect width="20" height="18" x="2" y="4" rx="4"/><path d="M8 2v4m8-4v4M2 10h20"/></g></svg>
            27th November - 30th November, 2024
        </p>
    </div>
</section>




<section class="join-2">
    <div>
        <div  data-aos="fade-right" data-aos-duration="2000">
            <img src="img/lappy.jpg">
        </div>
        
        <div>
            <div data-aos="fade-down-right" data-aos-duration="2000">
                <span><img src="img/icon1.png"></span>
                <span>Career Advancement 
Enhance your skills and Knowledge in Data Science
Boost your career prospects and salary potential</span>
            </div>

            <div data-aos="fade-down-left" data-aos-duration="2000">
                <span><img src="img/icon2.png"></span>
                <span>Stay Ahead of The Curve
Latest Trends and Advancements in AI, ML and DL
Emerging Technologies: Blockchain, IoT and Cloud 
Computing</span>
            </div>

            <div data-aos="fade-up-right" data-aos-duration="2000">
                <span><img src="img/icon3.png"></span>
                <span>Learn from Experts 
Insights from real-world case studies and success stories
Keynote speeches from renowned experts in Data science, 
Data analytics and AI</span>
            </div>

            <div data-aos="fade-up-left" data-aos-duration="2000">
                <span><img src="img/icon4.png"></span>
                <span>Innovative Solutions 
Explore cutting edge tools and technologies 
Discover innovative applications of Data Science 
Learn from pioneers in data-driven decision-making</span>
            </div>
        </div>
    </div>
</section>



<section class="join-4" data-aos="zoom-in">
    <p>Who is this summit for?</p>
</section>


<section class="join-5">
    <div>
        <div data-aos="fade-up-left" data-aos-duration="1000">
            <span>Students and Professionals seeking 
            career advancement </span>
            <span><img src="img/join1.png"></span>
        </div>

        <div data-aos="fade-up-right" data-aos-duration="1000">
            <span>Data Scientists and Analysts </span>
            <span><img src="img/join2.png"></span>
        </div>

        <div data-aos="fade-up-left" data-aos-duration="1000">
            <span>Business Leaders, Entrepreneurs, 
            Innovators and decision-makers </span>
            <span><img src="img/join3.png"></span>
        </div>
    </div>
</section>




<section class="join-3"  data-aos="zoom-in" data-aos-duration="3000">
    <div>
        <p>Don’t miss out on this opportunity!!!! Register now to secure 
        your spot.</p>

        <p>See you at the Data Science Summit’24</p>

        <p>
            <a href="register">register</a>
        </p>
    </div>
</section>



<style>
    body{
        margin: 0px;
        background-image: linear-gradient(#000000, #060D17, #021631,#021631);
    }

    /* STYLING join 1 */

    .join-1{
        padding: 15% 0%;
    }
    .join-1 div p:nth-child(1){
        text-align: center;
        color: #FFFFFF;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 56px;
        line-height: 68.3px;
        text-transform: capitalize;
    }

    .join-1 div p:nth-child(2){
        text-align: center;
        color: #FFFFFF;
        font-family: Montserrat;
        font-weight: 400;
        font-size: 32px;
        line-height: 39px;
        text-transform: capitalize;
        align-items: center;
        display: flex;
        justify-content: center;
    }


    /* STYLING join 2 */

    .join-2{
        padding: 5% 10%;
    }
    .join-2 div{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .join-2 div div{
        margin: 5px;
    }

    .join-2 div div:nth-child(1) img{
        width: 470px;
        height: 610px;
    }

    .join-2 div div:nth-child(1) p, .join-2 div div:nth-child(3) p{
        font-family: Montserrat;
        font-size: 40px;
        line-height: 49px;
        text-align: center;
        font-weight: 600;
        color: #FFFFFF;
        text-transform: none;
    }
    .join-2 div div:nth-child(2){
        display: flex;
        justify-content: center;
        flex-wrap:wrap;
        padding: 5% 0px;
    }

    .join-2 div div:nth-child(2) div{
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        border: 2px solid #D9D9D9;
        background: #000000;
        width: 290px;
        height: 280px;
        margin: 10px;
        border-radius: 40px;
        padding: 20px;
    }
    .join-2 div div:nth-child(2) div img{
        width: 64px;
        height: 64px;
    }
    .join-2 div div:nth-child(2) div span{
        margin: 5px;
    }
    .join-2 div div:nth-child(2) div span:nth-child(1){
        margin-left: 0px;
        text-align: left;
    }
    .join-2 div div:nth-child(2) div span:nth-child(2){
        color: #FFFFFF;
        font-family: Montserrat;
        font-size: 20px;
        line-height: 24.38px;
        font-weight: 600;
    }



    /* STYLING join 3 */

.join-3{
    padding: 20% 10% 5% 10%;
}
.join-3 div{
    text-align: center;
    background-color: #091F3D;
    padding: 30px;
    border-radius: 40px;
    width: 85%;
    /* height: 370px; */
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.join-3 div p:nth-child(1){
    text-transform: none;
    font-size: 32px;
    font-weight: 600;
    font-family: Montserrat;
    color: #FFFFFF;
    line-height: 45px;
}
.join-3 div p:nth-child(2){
    text-transform: capitalize;
    font-size: 32px;
    font-weight: 600;
    font-family: Montserrat;
    color: #FFFFFF;
    line-height: 45px;
}
.join-3 div p:nth-child(3) a{
    font-size: 32px;
    font-family: Montserrat;
    font-weight: 600;
    line-height: 45px;
    text-decoration: none;
    padding: 10px 30px;
    border-radius: 40px;
    background-color: #FFFFFF;
    color: #000000;
    text-transform: uppercase;
}



/* STYLING JOIN 4 */

.join-4 p{
    font-size: 56px;
    line-height: 69px;
    font-family: Montserrat;
    font-weight: 600;
    color: #F8F8F8;
    text-align: center;
}



/* STYLING JOIN 5 */


.join-5{
    padding: 5% 10%;
}
.join-5 div{
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    align-items: center;
}

.join-5 div div{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-top: 70px;
    background-color: #091F3D;
    width: 70%;
    height: 275px;
    border-radius: 40px;
    padding: 20px;
}

.join-5 div div span{
    margin: 20px;
}
.join-5 div div span:nth-child(1){
    font-family: Montserrat;
    line-height: 50px;
    font-size: 36px;
    font-weight: 600;
    color: #FFFFFF;
}
.join-5 div div span:nth-child(2) img{
    width: 250px;
    height: 200px;
}





footer section div:nth-child(2) div:nth-child(3) span:nth-child(1){
        margin: 10px;
        font-family: Outfit;
        font-weight: 600;
        font-size: 30px;
        line-height: 37.8px;
    }

</style>






<script>
    document.getElementById('title').innerHTML='Connective-why join';
</script>

<?php require 'pages/footer.php'; ?>

<style>
    footer section div:nth-child(1) a{
        color: #FFFFFF;
    }
    footer section div:nth-child(2) div:nth-child(1) a, footer section div:nth-child(2) div:nth-child(2) a{
        color: #FFFFFF;
    }
    footer section div:nth-child(2) div:nth-child(3) span:nth-child(1){
        color: #FFFFFF;
    }
</style>


</body>
</html>