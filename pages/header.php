<html>
<head>
<title id='title'>Connective-HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='home.css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>


<body>

<header class="gen-nav">
    <div>
        <div data-aos="fade-right" data-aos-duration="3000"><a href="index"><svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 24 24"><g fill="none" stroke="#F8F8F8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"><path d="M15 10v-.25A1.75 1.75 0 0 0 13.25 8H11a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h2.25A1.75 1.75 0 0 0 15 14.25V14"/><path d="M20.5 15.8V8.2a1.91 1.91 0 0 0-.944-1.645l-6.612-3.8a1.88 1.88 0 0 0-1.888 0l-6.612 3.8A1.9 1.9 0 0 0 3.5 8.2v7.602a1.91 1.91 0 0 0 .944 1.644l6.612 3.8a1.88 1.88 0 0 0 1.888 0l6.612-3.8A1.9 1.9 0 0 0 20.5 15.8"/></g></svg> <br>connective</a></div>
        <div data-aos="zoom-in" data-aos-duration="3000">
            <nav>
                <ul>
                    <a href="index"><li>HOME</li></a>
                    <a href="schedule"><li>SCHEDULE</li></a>
                    <a href="speakers"><li>SPEAKERS</li></a>
                    <a href="join"><li>WHY JOIN</li></a>
                </ul>
            </nav>
        </div>
        <div data-aos="fade-left" data-aos-duration="3000">
            <a href='register' id="reg_short">REGISTER</a>
            <button id="menu_btn">MENU</button>
        </div>
    </div>
</header>



<style>
    #menu_btn{
        display: none;
    }
    .gen-nav{
    position: sticky;
    z-index: 9;
    top: 0px;
    background-color: #091F3D;
    padding: 0.5% 10%;
    font-family: Montserrat;
}
.gen-nav div{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
.gen-nav div div:nth-child(1) a{
   text-align: center;
   text-decoration: none;
   text-transform: uppercase;
   font-family: Montserrat;
   font-weight: 600;
   font-size: 20px;
   color: #FFFFFF;
}
.gen-nav div div:nth-child(2) nav ul li{
    display: inline-block;
    list-style-type: none;
    padding: 10px;
    color: white;
    font-size: 20px;
    font-weight: 600;
    line-height: 24.38px;
    font-family: Montserrat;
}
.gen-nav div div:nth-child(3) a{
    text-decoration: none;
    background-color: #FFFFFF;
    font-size: 22px;
    font-weight: 600;
    padding: 15px 30px;
    border-radius: 40px;
    color: #091F3D;
    text-align: center;
    width: 170px;
}

/* RESPONSIVE DESIGN FOR HEADER */
@media only screen and (max-width: 600px){
    .gen-nav div div:nth-child(2), #reg_short {
   display: none;
}
#menu_btn{
    display: block;
}
}


</style>