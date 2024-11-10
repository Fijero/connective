<footer>
    <section>
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <a href="index"> CONNECTIVE</a>
        </div>
        <div>
            <div data-aos="zoom-in-up" data-aos-duration="1000">
                <a href="index"><span>CONNECTIVE</span></a>
                <a href="index"><span>HOME</span></a>
                <a href="join"><span>ABOUT</span></a>
                <a href="join"><span>JOIN</span></a>
            </div>

            <div data-aos="zoom-in-up" data-aos-duration="2000">
            <a href=""><span>CONTACT</span></a>
            <a href=""><span>EMAIL</span></a>
            <a href=""><span>INSTAGRAM</span></a>
            <a href=""><span>FACEBOOK</span></a>
            </div>

            <div data-aos="zoom-in-up" data-aos-duration="3000">
            <span>Subscribe to our newsletter</span>
            <span>
                <form>
                    <input type="email" placeholder="Email"> <br>
                    <button type="submit">Submit</button>
                </form>
            </span>
            </div>
        </div>
    </section>
</footer>

<div style="margin-bottom:0px; background:#091F3D; height:50px">

</div>

<style>
    footer{
        padding: 5% 10%;
    }
    footer section{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        text-align: center;
        padding: 20px;
    }
    footer section div{
        margin: 20px;
    }
    footer section div:nth-child(1) a{
        font-family: Outfit;
        font-weight: 700;
        font-size: 38px;
        line-height: 47.88px;
        color: #091F3D;
    }
    footer section div:nth-child(2){
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    footer section div:nth-child(2) div{
        display: flex;
        flex-direction: column;
    }
    footer section div:nth-child(2) div:nth-child(1) a{
        margin: 10px;
    }
    footer section div:nth-child(2) div:nth-child(1) a, footer section div:nth-child(2) div:nth-child(2) a{
        font-size: 24px;
        font-weight: 600;
        line-height: 30.24px;
        font-family: Outfit;
        color: #091F3D;
    }

    footer section div:nth-child(2) div:nth-child(3) span:nth-child(1){
        margin: 10px;
        font-family: Outfit;
        font-weight: 600;
        font-size: 30px;
        line-height: 37.8px;
        color: #091F3D;
    }

    footer section div:nth-child(2) div:nth-child(3) {
       text-align: justify;
    }

    footer section div:nth-child(2) div:nth-child(3) span:nth-child(2) form input[type='email']{
        width: 425px;
        height: 40px;
        border: 0px;
        outline: none;
    }
    footer section div:nth-child(2) div:nth-child(3) span:nth-child(2) form input[type='email']::placeholder{
        font-weight: 700;
        size:24px;
        line-height: 29px;
        font-family: Montserrat;
        padding: 10px;
    }
</style>

<script>AOS.init();</script>