<?php require 'pages/header.php'; ?>


<section class="reg-1">
    <div  data-aos="zoom-in" data-aos-duration="3000">
        <form method="POST">
        <div>
                <span>
                    <p>registration</p>
                </span>
                <span>
                    <input type="text" placeholder="Name" name="name" required> <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><circle cx="12" cy="6" r="4" fill="white"/><path fill="white" d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5"/></svg></i>
                </span>
                <span>
                    <input type="email" placeholder="Email" name="email" required> <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="M7.29 4.908a54.4 54.4 0 0 1 9.42 0l1.511.13a2.89 2.89 0 0 1 2.313 1.546a.236.236 0 0 1-.091.307l-6.266 3.88a4.25 4.25 0 0 1-4.4.045L3.47 7.088a.236.236 0 0 1-.103-.293A2.89 2.89 0 0 1 5.78 5.039z"/><path fill="white" d="M3.362 8.767a.248.248 0 0 0-.373.187a30.4 30.4 0 0 0 .184 7.56A2.89 2.89 0 0 0 5.78 18.96l1.51.131c3.135.273 6.287.273 9.422 0l1.51-.13a2.89 2.89 0 0 0 2.606-2.449a30.4 30.4 0 0 0 .161-7.779a.248.248 0 0 0-.377-.182l-5.645 3.494a5.75 5.75 0 0 1-5.951.061z"/></svg></i>
                </span>
                <span>
                    <input type="number" placeholder="Phone no" name="phone" required> <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="white" d="m16.556 12.906l-.455.453s-1.083 1.076-4.038-1.862s-1.872-4.014-1.872-4.014l.286-.286c.707-.702.774-1.83.157-2.654L9.374 2.86C8.61 1.84 7.135 1.705 6.26 2.575l-1.57 1.56c-.433.432-.723.99-.688 1.61c.09 1.587.808 5 4.812 8.982c4.247 4.222 8.232 4.39 9.861 4.238c.516-.048.964-.31 1.325-.67l1.42-1.412c.96-.953.69-2.588-.538-3.255l-1.91-1.039c-.806-.437-1.787-.309-2.417.317"/></svg></i>
                </span>
                <span>
                    <input type="submit" value="Register">
                </span>
        </div>
        </form>
    </div>
</section>






<style>
body{
    margin: 0px;
    background-image: url('img/regbg.png');
    background-repeat: no-repeat; 
    background-size: cover; 
    background-attachment: fixed;
    /* background-image: linear-gradient( #060D17, #021631,#021631); */
    
}

.reg-1{
    padding: 15% 0%;
    background-image: linear-gradient( #060D17, rgba(9, 31, 61, 0.95));
    height: 100%;
}

.reg-1 div{
    display: flex;
    justify-content: center;
    color: red;
}
.reg-1 div form div{
    border: 3px solid rgba(255, 255, 255, 1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 30px;
    width: 800px;
    box-shadow: inset 10px 1px 70px 10px rgba(255, 255, 255, 0.4);
    padding: 0 10%;
    height: 500px;
}

.reg-1 div form div span:nth-child(1){
    font-size: 36px;
    font-family: Montserrat;
    font-weight: 700;
    line-height: 43.88px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 1);
    text-align: center;
}
.reg-1 div form div span{
    margin: 10px;
}
.reg-1 div form div span input{
    height: 40px;
    width: 100%;
    outline: none;
    background:none;
    border: 0px;
    color: white;
}
.reg-1 div form div span:nth-child(2),.reg-1 div form div span:nth-child(3),.reg-1 div form div span:nth-child(4){
    display: flex;
    width: 80%;
    padding: 0px;
    border-bottom: 1px solid white;
}
.reg-1 div form div span:nth-child(5){
    margin-top: 50px;
    width: 60%;
}
.reg-1 div form div span:nth-child(5) input{
    border-radius: 20px;
    border: 2px solid rgba(255, 255, 255, 0.65);
    background-color: rgba(9, 31, 61, 1);
    color: white;
    font-family: Montserrat;
    font-weight: 700;
    font-size: 32px;
    line-height: 39px;
    padding: 5px;
    height: unset;
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
    document.getElementById('title').innerHTML='Connective-register';
</script>

<div style="background-color: rgba(9, 31, 61, 0.95);"> 
    <?php require 'pages/footer.php'; ?>
</div>

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