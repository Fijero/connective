<?php require 'pages/header.php'; ?>



<section class="speak-1" data-aos="zoom-in-up" data-aos-duration="3000">
    <div>
        <p>Speakers</p>
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 24 24" style="margin-right: 5px;"><g fill="none" stroke="#F8F8F8" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.55"><rect width="20" height="18" x="2" y="4" rx="4"/><path d="M8 2v4m8-4v4M2 10h20"/></g></svg>
            27th November - 30th November, 2024
        </p>
    </div>
</section>




<section class="speak-2">
        <div data-aos="fade-up-right" data-aos-duration="1000">
            <span>
                <p><img src="img/prof1.png"></p>
                <p>Floyd Miles</p>
            </span>
            
            <span id="ere">
                <p>data sicence keynote speaker</p>
                <p>unlocking insights<br><br>10+ years experience in predictive 
                    Ph.D in Computer Science, Stanford University
                    models and analytics
                    Expertise: Machine Learning, Data Visualization, NLP.
                </p>
            </span>
        </div>
        


        <div data-aos="fade-up-left" data-aos-duration="2000">
            <span>
                <p><img src="img/prof2.png"></p>
                <p>Ralph Edwards</p>
            </span>
            <span>
                <p>data sicence keynote speaker</p>
                <p>unlocking insights<br><br>8+ years experience in data 
visualization & storytelling.
Certified in Tableau & Power BI.
Expertise: Data Wrangling, Statistical Modelling, Dashboard Design.
                </p>
            </span>
        </div>



        <div data-aos="fade-up-right" data-aos-duration="3000">
            <span>
                <p><img src="img/prof3.png"></p>
                <p>Theresa Webb</p>
            </span>
            <span>
                <p>data sicence keynote speaker</p>
                <p>unlocking insights <br><br>Research Scientist, MIT CSAIL
Ph.D in Electrical Engineering & Computer Science, UC Berkeley.
Expertise: AI Ethics, Fairness, Transparency.
                </p>
            </span>
        </div>
</section>



<section class="speak-3"  data-aos="zoom-in" data-aos-duration="3000">
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
        /* background-image: linear-gradient(#000000, #060D17, #021631,#021631); */
    }

    /* STYLING speak 1 */

    .speak-1{
        padding: 15% 0%;
    }
    .speak-1 div p:nth-child(1){
        text-align: center;
        color: #021631;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 56px;
        line-height: 68.3px;
        text-transform: capitalize;
    }

    .speak-1 div p:nth-child(2){
        text-align: center;
        color: #021631;
        font-family: Montserrat;
        font-weight: 400;
        font-size: 32px;
        line-height: 39px;
        text-transform: capitalize;
        align-items: center;
        display: flex;
        justify-content: center;
    }


    /* STYLING speak 2 */

.speak-2{
    padding: 5% 10%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.speak-2 div{
    /* margin: 0 auto; */
    background-color: #091F3D;
    margin: 20px;
    border-radius: 40px;
    display: flex;
    flex-direction: row;
    width: 80%;

}
.speak-2 div span{
    margin: 20px;
}
.speak-2 div span:nth-child(2){
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.speak-2 div span:nth-child(1) p:nth-child(2){
    text-align: center;
    color: #FFFFFF;
    font-family: Montserrat;
    font-weight: 700;
    font-size: 40px;
    line-height: 48px;
}
.speak-2 div span:nth-child(2) p:nth-child(1){
    color: #FFFFFF;
    text-transform: capitalize;
    font-weight: 700;
    font-size: 38px;
    text-align: center;
}
.speak-2 div span:nth-child(2) p:nth-child(2){
    color: #FFFFFF;
    text-transform: capitalize;
    font-weight: 600;
    font-size: 25px;
    line-height: 50px;
    font-family: Montserrat;
}




    /* STYLING speak 3 */

.speak-3{
    padding: 10% 10% 5% 10%;
}
.speak-3 div{
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
.speak-3 div p:nth-child(1){
    text-transform: none;
    font-size: 32px;
    font-weight: 600;
    font-family: Montserrat;
    color: #FFFFFF;
    line-height: 45px;
}
.speak-3 div p:nth-child(2){
    text-transform: capitalize;
    font-size: 32px;
    font-weight: 600;
    font-family: Montserrat;
    color: #FFFFFF;
    line-height: 45px;
}
.speak-3 div p:nth-child(3) a{
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

footer section div:nth-child(2) div:nth-child(3) span:nth-child(1){
        margin: 10px;
        font-family: Outfit;
        font-weight: 600;
        font-size: 30px;
        line-height: 37.8px;
    }

</style>






<script>
    document.getElementById('title').innerHTML='Connective-SPEAKERS';
</script>

<?php require 'pages/footer.php'; ?>

<style>
    footer section div:nth-child(1) a{
        color: #091F3D;
    }
    footer section div:nth-child(2) div:nth-child(1) a, footer section div:nth-child(2) div:nth-child(2) a{
        color: #091F3D;
    }
    footer section div:nth-child(2) div:nth-child(3) span:nth-child(1){
        color: #091F3D;
    }
    footer section div:nth-child(2) div:nth-child(3) span:nth-child(2) form input[type='email']{
        background: rgba(200, 200, 200, 1) !important;
    }
    footer section div:nth-child(2) div:nth-child(3) span:nth-child(2) form input[type='email']::placeholder{
        color: white;
    }
</style>


</body>
</html>