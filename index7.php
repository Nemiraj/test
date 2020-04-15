 <!DOCTYPE html>
<html>
    <head>
        
        
        
        <link href='https://fonts.googleapis.com/css?family=New Rocker' rel='stylesheet'>
        
        <title>Page Title</title>
        
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        
        <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
        
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"rel="stylesheet">

        
        <style>
             
html,body{
    scroll-behaviour:smooth;
}
:root{
    --widthnav:0vw;
    --navscale:scale(0);
    
    
}

#rot{
    position:absolute;
    height:100vh;
    display:none;
    width:100vw;
    z-index:999;
    text-align:center;
    line-height:100vh;
    font-size:5vw;
    font-family:'new rocker';
    background:#fff;
}
@media screen and (orientation:landscape) {
    #rot{
        display:block;
    }    
} 

#loader{
    height:100vh;
    width:100vw;
    position:absolute;
    background:#fff;
    z-index:999;
    height:1000vh;
}


a{
    text-decoration:none;
    color:inherit;
}

#ja{
    text-transform:uppercase;
    font-size:6vh;
    font-weight:bold;
    font-family:'new rocker',serif;
    position:fixed;
    top:50%;
    
    left:50%;
    animation:lbg 1s linear infinite;
    background:-webkit-linear-gradient(65deg,#1068d9, #009bff); 
    -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent;
    background-size:40%;
    transform:translate(-50%,-50%);
}

@keyframes lbg{
    to{
        background-position:200%;
    }
}

#lmsg{
    text-transform:uppercase;
    font-size:3vh;
    color:#333;
    position:fixed;
    bottom:0%;
    left:50%;
    transform:translate(-50%);
}


#lball1{
    content:"";
    position:fixed;
    height:1vh;
    width:1vh;
    background:#333;
    border-radius:50%;
    bottom:10%;
    left:44%;
    animation:lball1 1.5s linear infinite;
}
#lball2{
    content:"";
    position:fixed;
    height:1vh;
    width:1vh;
    background:#333;
    border-radius:50%;
    left:49%;
    bottom:10%;
    animation:lball2 1.5s linear infinite;
}

#lball3{
    content:"";
    position:fixed;
    height:1vh;
    width:1vh;
    background:#333;
    border-radius:50%;
    left:54%;
    bottom:10%;
    animation:lball3 1.5s linear infinite;
}



@keyframes lball1{
    33%{
        opacity:0;
    }
    100%{
        opacity:1;
    }
}
@keyframes lball2{
    33%{
        opacity:1;
    }
    66%{
        opacity:0;
    }
    100%{
        opacity:1;
    }
}
@keyframes lball3{
    66%{
        opacity:1;
    }    
    99%{
        opacity:0;
    }
}

body {
    background:#fff;
    margin:0;
   /* height:200vh;*/
  
  
}

#brand{
    font-size:4vh;
    line-height:8vh;
    position:absolute;
    left:5vw;
    color:#fff;
    font-family:"new rocker";
    letter-spacing:1vw;
    
}
#brand::first-letter{
    color:gold;
}
.travel{
    font-weight:bold;
    font-family:cursive;
    letter-spacing:0;
}
#navbar{
    height:8vh;
    width:100vw;
    position:fixed;
    background:#3331;
    box-shadow:0 0 1vw 777;
    transition:1s;
    z-index:990;
    display:var(--ondis);
    
    
}
#navbutton{
    position:absolute;
    height:6vh;
    width:6vh;
    right:3vh;
    top:50%;
    transform:translate(0%,-50%);
}
.bar{
    height:.7vh;
    width:5vh;
    background:#eee;
    margin-left:2vh;
    margin-top:1.1vh;
    transition:1s;
}
#navitems{
    position:absolute;
    top:100%;
    z-index:999;
    width:0vw;
}
.navitem{
    height:8vh;
    width:var(--widthnav);
    background:#333;
    /*border-top:#aaa solid .4vw;
    border-right:#aaa solid .4vw;
    box-shadow:0 0 .7vw #000;
    margin-top:.4vh;*/
    transform:var(--navscale);
    transition:.7s;
    font-size:2.5vh;
    overflow:hidden;
    color:#ccc;
    text-shadow:0 0 .4vw #000;
    text-align:center;
    line-height:8vh;
    /*border-bottom:solid .2vh #777;*/
    
}


.navitem:nth-child(1){
    transition-delay:.1s;
    /*border-top:solid .2vh #777;*/
}

.navitem:nth-child(2){
    transition-delay:.2s;
}

.navitem:nth-child(3){
    transition-delay:.3s;
}

.navitem:nth-child(3){
    transition-delay:.4s;
}

.navitem:nth-child(4){
    transition-delay:.5s;
}

.navitem:nth-child(5){
    transition-delay:.6s;
    border-bottom:0;
}
#carousel1{
    height:100vh;
    width:100vw;
    animation:changeslide 12s linear infinite;
    background-size:cover;
    clip-path:polygon(0% 0%,100% 0%,100% 95%,50% 100%,0% 95%);
}
#carousel1::before{
    content:"";
    position:absolute;
    height:100%;
    width:100%;
    background:#0008;
    clip-path:polygon(0% 0%,100% 0%,100% 95%,50% 100%,0% 95%);
    
}
    
@keyframes changeslide{
    0%{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTYzvbP6u0LYPo_JKx0yPjE846sGjKSlx2ulbkh6OhAyQmeIFzg");
    }
    20%{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTYzvbP6u0LYPo_JKx0yPjE846sGjKSlx2ulbkh6OhAyQmeIFzg");
    }
    30%{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSgF0fzUBSqvli-aC9dIpTFzI1Q2TehAS-TisjQuG9tSElB_DS2");
    }
    50%{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSgF0fzUBSqvli-aC9dIpTFzI1Q2TehAS-TisjQuG9tSElB_DS2");
    }
    60%{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIl30aIqdWKWg9A4Ey3C-MzNYiOlPvpY-6aslxPDmOHkQ8g3dQ");
    }
    90%{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIl30aIqdWKWg9A4Ey3C-MzNYiOlPvpY-6aslxPDmOHkQ8g3dQ");
    }
    to{
        background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTYzvbP6u0LYPo_JKx0yPjE846sGjKSlx2ulbkh6OhAyQmeIFzg");
   }
}

#c1text{
    font-size:5vh;
    color:#eee;
    position:absolute;
    font-weight:bold;
    left:50%;
    white-space:nowrap;
    top:30%;
    transform:translate(-50%,-50%);
}

#c1n{
    font-size:6vh;
    font-weight:bold;
    color:#F79F1F;
    position:absolute;
    top:40%;
    left:50%;
    white-space:nowrap;
    transform:translate(-50%,-50%);
    text-shadow:.5vw .5vw .5vw #000;
}

#c1t{
    color:#ddd;
    text-shadow:.3vw .3vw .1vw #000;
    font-size:3vh;
    position:absolute;
    top:60%;
    text-align:center;
}

#c1t::after{
    content:'\226B';
    position:absolute;
    top:150%;
    color:#e67e22;
    left:47%;
    transform:rotate(90deg) translate(50%,0%);
    font-size:5vh;
    animation:curd 1s linear infinite ;
    opacity:0;
}

@keyframes curd{
    to{
        top:180%;
        opacity:1;
    }
}

::selection{
    color:#f00;
    background:#000;
}

#toursearch{
    height:80vh;
    width:80vw;
    background:#fff;
    margin-top:50vh;
    margin-left:50vw;
    transform:translate(-50%,-50%);
    box-shadow:0 0 2vw #aaa;
   
   /* box-shadow:1vw 1vw 2vw .5vw #ccc,
    -1vw -1vw 2vw .5vw #d8d8d8 ;*/
    
}
#tsb{
    /*position:absolute;*/
    height:8vh;
    width:80%;
    background:#333;
    margin-left:50%;
    transform:translate(-50%,30%);
    font-size:4vh;
    font-weight:bold;
    color:#F2F1EF;
    text-align:center;
    line-height:8vh;
    font-family:serif;
}

#destination{
    margin-top:10vh;
    /*background:#222;*/
    box-shadow:0 0 .6vw #aaa;
    font-family:serif;
    color:#222;
    font-size:2vh;
    font-weight:bold;
    line-height:5vh;
    height:5vh;
    width:80%;
    left:50%;
    position:absolute;
    transform:translate(-50%);
}
.fa-map-marker{
    margin-right:5vw;
    font-size:3vh;
    margin-left:2vw;
    color:#ff7400;
}

.fa-arrow-down{
    float:right;
    margin-right:3vw;
    line-height:5vh;
    color:#222;
}

#dstnitems{
    width:100%;
    position:absolute;
    top:100%;
    z-index:2;
    height:0vh;
    overflow:scroll;
    transition:1s;
    
}

.dstnitem{
    height:6vh;
    font-size:2vh;
    line-height:6vh;
    width:100%;
    background:#ddd;
    border-bottom:.2vw solid #aaa;
    text-indent:3vw;
    
}

#tsadults{
    height:10%;
    width:35%;
   /* background:#222;*/
    position:absolute;
    left:10%;
    top:35%;
    color:#222;
    font-size:3vh;
    line-height:8vh;
}

#tskids{
    height:10%;
    width:35%;
    /*background:#222;*/
    position:absolute;
    right:10%;
    top:35%;
    color:#222;
    font-size:3vh;
    line-height:8vh;
    
}


.fa-child,.fa-male{
    color:#222;
    font-size:5vh;
    line-height:8vh;
    text-indent:1vw;
    padding-right:3vw;
    margin-left:2vw;
}



.fa-chevron-up{
    position:absolute;
    right:1vw;
    top:1vh;
}

.fa-chevron-down{
    position:absolute;
    right:1vw;
    bottom:1vh;
}

.fa-chevron-up:hover{
    color:#ff7400;
}

.fa-chevron-down:hover{
    color:#ff7400;
}

input[type = 'date']{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%);
    height:4vh;
    width:80%;
    font-size:2vh;
    text-indent:5vw;
    color:#222;
    background:#fff;
    outline:none;
    border:0;
    font-weight:bold;
    box-shadow:0 0 .6vh #aaa;
}

#d2{
    top:60%;
}

#tsearch{
    height:8vh;
    width:80%;
    background:linear-gradient(35deg,#008cff 15%,#ff7400 15% 100%);
    position:absolute;
    left:50%;
    transform:translate(-50%,0%);
    top:75%;
    text-align:center;
    font-size:5vh;
    color:#fff;
    line-height:8vh;
    text-transform:uppercase;
    font-weight:lighter;
    border-radius:1vh;
    box-shadow:0 0 1vh #aaa;
    transition:1s;
    background-size:100%;
    
}

#tsearch:hover{
    background-size:800%;
}


#pd{
    height:100vh;
    width:100%;
    margin-top:-30vh;
    position:relative;
    
}
#pdh{
    height:20vh;
    width:100%;
    background:#333;
    position:absolute;
    margin-top:8vh;
    
    text-align:center;
    line-height:10vh;
    font-size:4vh;
    font-weight:bold;
    color:#ddd;
}

[data-aos = 'pdh']{
    clip-path:polygon(0% 0%,100% 0%,100% 100%,0% 100%);
}

[data-aos = 'pdh'].aos-animate{
    clip-path:polygon(0% 0%,100% 0%,100% 50%,5% 50%,0% 100%);
}


#pdcr{
    height:70vh;
    width:80%;
    transform:translate(-50%,-50%);
    background:#fff;
    box-shadow:0 0 3vh #aaa;
    top:60%;
    left:50%;
    position:absolute;
    
    overflow-y:hidden;
    transition:1s;
    
}

.pdcitem{
    height:100%;
    width:100%;
    position:absolute;
    white-space:normal; 
    opacity:0;   
    transition:1s;
}




.pdcim{
    height:40%;
    width:100%;
    position:fixed;
    top:0;
    box-shadow:0 0 1vw #000;
}

.pdcitem:hover .dbkn{
    opacity:1;
}

.pdcitem:hover .pdbt{
    transform:translate(-50%,-50%) rotateY(0deg);
}

.pdcp{
    height:10%;
    width:100%;
    background:linear-gradient(45deg,#1068d9,#8eceff);
    font-size:3vh;
    font-weight:bold;
    color:#fff;
    line-height:7vh;
    text-align:center;
    position:absolute;
    top:40%;
}

input[type="checkbox"]{
    -webkit-appearance: none;
    height:3vh;
    width:3vh;
    position:absolute;
    top:50%;
    left:45%;
    background:#aaa;
    transform:translate(-50%,-50%) rotate(45deg);
    outline:none;
    z-index:100;
}

input[type = "checkbox"]::before{
    height:100%;
    width:100%;
    left:-50%;
    border-radius:50%;
    background:inherit;
    position:absolute;
    content:"";
    
}

input[type = "checkbox"]::after{
    height:100%;
    width:100%;
    top:-50%;
    border-radius:50%;
    background:inherit;
    position:absolute;
    content:"";
    
}

input[type="checkbox"]:checked{
    -webkit-appearance: none;
    background:#f00;
}
   
    

    
.bkmrkcont{
    height:7vh;
    text-align:center;
    width:7vh;
    bottom:3%;
    right:4%;
    position:absolute;
    border-radius:1vh;
    box-shadow:0 0 .4vw .1vw #ddd;
}


.pdch{
    color:#ff7400;
    font-size:4vh;
    font-weight:bold;
    text-transform:uppercase;
    text-indent:8vw;
    padding-top:1vh;
    text-decoration:underline #333;
    text-align:left;
    position:absolute;
    top:50%;
}

.pdct{
    font-size:2vh;
    font-weight:bold;
    width:80%;
    position:absolute;
    color:#222;
    padding-left:8vw;
    top:58%;
    padding-top:2vh;
    
}


#pdprev,#pdnext{
    position:absolute;
    color:#333;
    font-size:5vh;
    font-weight:bold;
    bottom:8%;
    z-index:2;
}

#pdprev{
    left:15%;
    display:none;
}

#pdnext{
    left:30%;
}

.dbkn{
    position:absolute;
    height:40%;
    width:100%;
    background:#222a;
    opacity:0;
    transition:.7s;
    perspective:200vmin;
    perspective-origin:50% 50%;
    
}

.pdbt{
    height:15%;
    width:30%;
    text-align:center;
    color:#fff;
    font-size:2vh;
    line-height:4vh;
    text-transform:uppercase;
    position:absolute;
    top:50%;
    left:50%;
    transform-origin:0%;
    transition:1s;
    transform:translate(-50%,-50%) rotateY(90deg);
    background:linear-gradient(35deg,#008cff 15%,#ff7400 15% 100%);
    background-size:100%;
    border-radius:0 1vh 0 1vh;

}

.pdbt:hover{
    background-size:600%;
}



#bph{
    font-size:5vh;
    text-align:center;
    
    text-transform:uppercase;
    font-family:"aldrich";
    font-weight:bold;
    margin-top:10vh;
}
#bphr{
    height:.4vh;
    background:#ff7400;
    margin-top:1vh;
    margin-left:50%;
    transform:translate(-50%);
    border:none;
}
[data-aos = "bphr"]{
    width:0;    
}

[data-aos = "bphr"].aos-animate{
    width:80%;    
}

[data-aos = "bph"]{
    color:#fff;  
     text-shadow:0 0 .3vh #000;
}

[data-aos = "bph"].aos-animate{
    color:#333;
    text-shadow:0 0 0 #000;  
}

#bpht{
    font-size:1.7vh;
    color:#333;
    text-shadow:none;
    
}

.bpim{
    height:100%;
    width:100%;
    transition:1s;
}

.bpimc{
    height:30vh;
    width:80%;
    border:solid 2vh #fff;
    box-shadow:0 0 1vh .4vh #eee;
    margin-left:50%;
    transform:translate(-50%);
    margin-top:5vh;
    overflow:hidden;
}

.bpimc:hover .bpim{
    transform:scale(1.2);
}

.bpcov{
    height:100%;
    width:100%;
    background:#3330;
    position:absolute;
    top:0;
    transition:1s;
    z-index:10;
    
}

.bpimc:hover .bpcov{
    background:#3336;
}

.bpimc:hover .bptt{
    top:40%;
}

.bpimc:hover .bpthr{
    width:100%;
}

.bpimc:hover .bpbt{
    bottom:10%;
}

.bptt{
    position:absolute;
    top:50%;
    left:50%;
    color:#ddd;
    font-weight:bold;
    transform:translate(-50%,-50%);
    text-transform:uppercase;
    font-size:3vh;
    z-index:11;
    transition:1s;
}

.bpthr{
    height:.2vh;
    border:0;
    background:#ff7400;
    margin-left:50%;
    margin-top:.4vh;
    outline:none;
    width:0%;
    transition:1s;
    transform:translate(-50%);
    
}

.bpbt{
    font-size:2vh;
    text-align:center;
    text-transform:uppercase;
    font-family:'aldrich';
    
    color:#fff;
    font-weight:bold;
    height:15%;
    width:30%;
    background:#ff7400;
    position:absolute;
    left:50%;
    bottom:-20%;
    transform:translate(-50%);
    transition:1s;
    z-index:11;
    line-height:5vh;
}


#bp{
    perspective:200vw;
    perspective-origin:50% 50%;
    
}

.bpbt:nth-child(1):hover{
    background:#000;
}

#ftr{
    height:150vh;
    width:100%;
    background:#333;
    position:relative;
    margin-top:10vh;
    overflow:hidden ;
    
}

#ftrh{
    font-size:4vh;
    font-family:"aldrich";
    top:5vh;
    left:50%;
    transform:translate(-50%);
    position:absolute;
    color:#fff;
    white-space:nowrap;
    
    
}

#ftrhr{
    height:.3vh;
    background:#ff7400;
    border:0;
    margin-left:50%;
    transform:translate(-50%);

    
}

[data-aos = 'ftrhr']{
    width:0;
}

[data-aos = 'ftrhr'].aos-animate{
    width:100%;
}

.ftrca{
    height:13vh;
    width:80%;
    transform:translate(-50%);
    background:#fff;
    margin-bottom:8vh;
    text-align:center;
    font-size:2vh;
    font-family:'aldrich';  
    color:#333;
    line-height:5vh;  
}

.ftrca:hover , .ftrcb:hover{
    background:#ff7400;
}

.ftrca:hover .ftrt , .ftrcb:hover .ftrt{
    color:#fff;
}

.ftrcb{
    height:13vh;
    width:80%;
    transform:translate(-50%);
    background:#fff;
    margin-bottom:8vh;
    text-align:center;
    color:#333;
    font-size:2vh;
    font-family:'aldrich';  
    line-height:5vh; 
}

#fc1{
    opacity:0;
}

[data-aos = 'ftrca']{
    margin-left:-50%;
}

[data-aos = 'ftrca'].aos-animate{
    margin-left:50%;
}


[data-aos = 'ftrcb']{
    margin-left:150%;
}

[data-aos = 'ftrcb'].aos-animate{
    margin-left:50%;
}

.ftrt{
    font-size:3vh;
    line-height:5vh;
    color:#ff7400;
    font-weight:bolder;
    font-family:'new rocker';
    transition:1.5s;
}

#revs{
    height:100vh;
    width:100%;
    background:#fff;
    position:relative;
    
    
}


/*#rnext{
    height:7vh;
    width:10vh;
    position:absolute;
    top:48%;
    translate(0%,-50%);
    background:#008cff;
    clip-path:polygon(50% 0%,100% 50%,50% 100%);
    right:10%;
}

#rprev{
    height:7vh;
    width:10vh;
    position:absolute;
    top:48%;
    translate(0%,-50%);
    background:#008cff;
    clip-path:polygon(50% 0%,0% 50%,50% 100%);
    left:10%;
}*/

.review{
    height:50%;
    width:80%;
    position:absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%);
    background:#fff;
    box-shadow:0 0 .7vh #ddd;
    animation:fade 15s linear infinite;
    text-align:center;
    
    
}

@keyframes fade{
    17%{
        opacity:1;
    }
    
    17.1%{
        opacity:0;
    }
    
    19.9%{
        opacity:0;
    }
    
    20%{
        opacity:1;
    }
    
    37%{
        opacity:1;
    }
    
    37.1%{
        opacity:0;
    }
    
    39.9%{
        opacity:0;
    }
    
    40%{
        opacity:1;
    }
    
    57%{
        opacity:1;
    }
    57.1%{
        opacity:0;
    }
    
    59.9%{
        opacity:0;
    }
    
    60%{
        opacity:1;
    }
    
    77%{
        opacity:1;
    }
    
    77.1%{
        opacity:0;
    }
    
    79.9%{
        opacity:0;
    }
    
    80%{
        opacity:1;
    }
    
    97%{
        opacity:1;
    }
    
    97.1%{
        opacity:0;
    }
    
    99.9%{
        opacity:0;
    }
        
    
}

.revic{
    height:13vh;
    width:13vh;
    top:10%;
    left:50%;
    transform:translate(-50%);
    position:absolute;
    clip-path: polygon(5% 5%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%); 
    background-image:url("https://api.sololearn.com/Uploads/Avatars/17292663.jpg");
    animation:changebg 15s linear infinite;
    background-size:cover;

}

@keyframes changebg{
    17%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/17292663.jpg");
    }
    
    17.1%{
        background-image:url("");
    }
    
    19.9%{
        background-image:url("");
    }
    
    20%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/11516328.jpg");
    }
    
    37%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/11516328.jpg");
    }
    
    37.1%{
        background-image:url("");
    }
    
    39.9%{
        background-image:url("");
    }
    
    40%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/4714357.jpg");
    }
    
    57%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/4714357.jpg");
    }
    57.1%{
        background-image:url("");
    }
    
    59.9%{
        background-image:url("");
    }
    
    60%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/16454530.jpg");
    }
    
    77%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/16454530.jpg");
    }
    
    77.1%{
        background-image:url("");
    }
    
    79.9%{
        background-image:url("");
    }
    
    80%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/11052810.jpg");
    }
    
    97%{
        background-image:url("https://api.sololearn.com/Uploads/Avatars/11052810.jpg");
    }
    
    97.1%{
        background-image:url("");
    }
    
    99.9%{
        background-image:url("");
    }
        
}

#revt{
    color:#222;
    font-size:3.1vh;
    position:center;
    bottom:5%;
    font-family:"aldrich";
}

#revt::first-letter{
    color:gold;
    font-weight:bolder;
}

#stars{
    position:absolute;
    letter-spacing:1vw;
    color:gold;
    top:40%;
    left:50%;
    transform:translate(-50%);
    font-size:2.8vh;
}
#tr{
    color:#333;
    font-size:4vh;
    font-weight:bolder;
    position:absolute;
    text-transform:uppercase;
    top:5vh;
    left:50%;
    transform:translate(-50%);
}

#trh{
    height:.3vh;
    background:#ff7400;
    border:0;
    margin-left:50%;
    transform:translate(-50%);

    
}

[data-aos = 'trh']{
    width:0;
}

[data-aos = 'trh'].aos-animate{
    width:100%;
}


#nltr{
    height:30vh;
    width:80vw;
    position:relative;
    margin-top:5vh;
    background:#fff;
    box-shadow:0 0 3vh #ddd;
    margin-left:50%;
    transform:translate(-50%);
    
}

#nltrt{
    color:#333;
    font-size:2vh;
    font-weight:bolder;
    position:absolute;
    text-transform:uppercase;
    top:1vh;
    left:50%;
    transform:translate(-50%);
    text-transform:uppercase;
    white-space:nowrap;
}

#nlth{
    height:.3vh;
    background:#ff7400;
    border:0;
    margin-left:50%;
    transform:translate(-50%);
    
    
    
}

[data-aos = 'nlth']{
    width:0;
}

[data-aos = 'nlth'].aos-animate{
    width:100%;
}

#nlti{
    position:absolute;
    height:15%;
    width:60%;
    left:10%;
    outline:none;
    box-shadow:0 0 1vh #ddd;
    text-indent:3vw;
    font-weight:bold;
    top:40%;
    border:none;
    
}

::placeholder{
    color:#333;
    text-indent:3vw;
    font-weight:bold;
}

#nltb{
    height:17%;
    width:20%;
    background:#ff7400;
    color:#fff;
    box-shadow:0 0 1vh #ddd;
    line-height:5vh;
    font-size:2vh;
    font-weight:bold;
    font-family:'aldrich';
    position:absolute;
    text-align:center;
    top:40%;
    right:10%;
    z-index:20;
}

#cntus{
    position:relative;
    margin-top:20vh;
    height:100vh;
    width:100%;
    
    background:#333;
    margin-bottom:10vh;
    
}


#cnth{
    font-size:5vh;
    text-align:center;
    position:absolute;
    text-transform:uppercase;
    font-family:"aldrich";
    font-weight:bold;
    color:#eee;
    top:3vh;
    left:50%;
    transform:translate(-50%);
    white-space:nowrap;
}
#cnthr{
    height:.4vh;
    background:#ff7400;
    margin-top:1vh;
    margin-left:50%;
    transform:translate(-50%);
    border:none;
    
}
[data-aos = "cnthr"]{
    width:0;    
}

[data-aos = "cnthr"].aos-animate{
    width:100%;    
}

.cnti{
    position:relative;
    height:10%;
    width:80%;
    margin-top:5vh;
    margin-left:5%;
    
}

.cntit{
    font-size:3vh;
    color:#fff;
    position:absolute;
    top:50%;
    transform:translate(0%,-50%);
    font-weight:bold;
    white-space:pre;
}



.cntihr{
    height:3.5vh;
    position:absolute;
    background:#ff7400;

    border:none;

    
}
[data-aos = "cntihr"]{
    width:100%;    
}

[data-aos = "cntihr"].aos-animate{
    width:0%;    
}

.cntit:hover{
    color:#ff7400;
}

.cntit:hover .fa{
    color:#fff;
}

#London, #Thailand, #India, #China, #Nepal{
    height:92vh;
    width:100%;
    position:fixed;
    background:#fff;
    top:8vh;
    left:0;
    display:none;
    z-index:900;
    overflow:scroll;
    text-align:center;
    
    
}

.fa-times{
    position:absolute;
    color:#fff;
    background:#333;
    top:2%;
    left:5%;
    font-size:3vh;
    border-radius:50%;
    height:6vh;
    width:6vh;
    box-shadow:0 0 1vh #000;
    line-height:6vh;
    z-index:999;
}

.fa-angle-double-down{
    position:absolute;
    font-size:7vh;
    top:70vh;
    color:#ff7400;
    left:50%;
    animation:angle 1s linear infinite ;
    transform:translate(-50%);
    z-index:999;
}

@keyframes angle{
    to{
        top:72vh;
    }
}

.lmimg{
    height:92vh;
    width:100%;
    position:relative;
    top:0;
}

.lctc{
    height:10vh;
    width:100%;
    text-transform:uppercase;
    font-size:5vh;
    font-weight:bold;
    font-family:"aldrich";
    color:#333;
    margin-top:10vh;
    position:relative ;
}

.lct{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    border-bottom:.4vh solid #ff7400;
}


.lti{
    font-size:2.5vh;
    color:#000;
    text-align:center;
    margin-top:10vh;
    font-style:monospace;
    position:relative;
    padding:5vw;
}

.ltd{
    height:10vh;
    width:80%;
    position:relative;
    margin-top:6vh;
    margin-left:50%;
    transform:translate(-50%);
    box-shadow:.5vh .5vh 1vh #ddd;
    font-size:3.5vh;
    font-weight:lighter;
    text-align:center;
    line-height:10vh;
    font-family:'aldrich';
}

.ltd:hover{
    color:#ff7400;
}

.lcbt{
    height:10vh;
    width:80%;
    position:relative;
    margin-top:6vh;
    margin-left:50%;
    margin-bottom:10vh;
    background:#ff7400;
    color:#fff;
    transform:translate(-50%);
    box-shadow:0 0 1vh #ddd;
    font-size:3.5vh;
    font-weight:lighter;
    text-align:center;
    line-height:10vh;
    font-family:'aldrich';
    text-transform:uppercase;
}

a:hover{
    color:#ff7400;
}


.fa-angle-double-up{
    position:fixed;
    color:#333;
    bottom:2%;
    right:5%;
    background:#fff;
    font-size:4vh;
    border-radius:50%;
    height:6vh;
    width:6vh;
    box-shadow:0 0 1vh #aaa;
    line-height:6vh;
    z-index:500;
    display:none;
    text-align:center;
    
}
#contactform{
    {
    color:#222;
    font-size:3.1vh;
    position:center;
    bottom:5%;
    font-family:"aldrich";
}

#contactform{
    color:gold;
    font-weight:bolder;
}

    
    
    
}
            
            
        </style>
    
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body>
   
        <div id="loader">
            <span id="ja">pack your bags</span>
            <span id='lmsg'>Loading...wait</span>
            <div id="lball1"></div>
            <div id="lball2"></div>
            <div id="lball3"></div>
        </div>
        <div id="navbar">
        <span id="brand">pack your bags <span class="travel"></span></span>
            <div id="navbutton">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
            <div id="navitems">
                <div class="navitem"><a href="#pd">Popular Destinations</a></div>
                <div class="navitem"><a href="#bp">Places to visit</a></div>
                <div class="navitem"><a href="#ftr">Our services</a></div>
                <div class="navitem"><a href="#revs">reviews</a></div>
                <div class="navitem"><a href="#cntus">Contact us</a></div>
                <div class="navitem"><a href="#cnt">Contact </a></div>
                
            </div>
        </div>
        <div id="carousel1">
        <span id="c1text">
Enjoy vacation with
        </span>
        <span id="c1n">pack your bags <span class="travel">Travel</span></span>
        <span id="c1t">“We travel not to escape life but for life not to escape us.” </span>
        </div>
        
        <div id="toursearch">
            <div id="tsb">
            Find your TOUR</div>
            
            
            <div id="tsadults">
                <i class="fa fa-male"></i><span id="tsa">0</span><i class="fa fa-chevron-up"></i>
                <i class="fa fa-chevron-down"></i>
            </div>
            <div id="tskids">
                <i class="fa fa-child"></i><span id="tsk">0</span><i class="fa fa-chevron-up"></i>
                <i class="fa fa-chevron-down"></i>
            </div>
            <input type="date" value="2019-01-19"/>
            
            <input type="date" value="2019-01-19" id="d2"/>
            
            
            <div id="destination"><i class="fa fa-map-marker"></i> <span id="dstn">Destination</span><i class="fa fa-arrow-down"></i>
                <div id="dstnitems">
                    <div class="dstnitem">location 1</div>
                    <div class="dstnitem">location 2</div>
                    <div class="dstnitem">location 3</div>
                    <div class="dstnitem">location 4</div>
                    <div class="dstnitem">location 5</div>
                    <div class="dstnitem">location 6</div>
                    <div class="dstnitem">location 7</div>
                    <div class="dstnitem">location 8</div>
                    <div class="dstnitem">location 9</div>
                    <div class="dstnitem">location 10</div>
                </div>
                
                
            </div>
            <div id="tsearch">Search</div>
            
            
            
        </div>
        
        <div id="pd">
        
                
            <div id="pdh" data-aos = "pdh">Popular destinations</div>
            <i id="pdprev" class="fa fa-long-arrow-left"></i>
                <i id="pdnext" class="fa fa-long-arrow-right"></i>
            <div id="pdcr">
            
            
                <div id="pdci" class="pdcitem">
                    <img class="pdcim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0f1qEI8bUtQSbR57LDuiWSs7E_gX1x_TSqFkU8ts_gvLAI7jR" />
                    <div class="dbkn">
                        <div class="pdbt" onclick="document.querySelector('#China').style.display = 'block';">more details</div>
                    </div>
                    <div class="pdcp"><del>10000</del> 9999 / person</div>
                    <div class="pdch">china</div>
                  <span class="pdct">Weather-wise,the best times to visit China are spring (April–May) and autumn (September–October), when most of the popular places have their most tourism-friendly weather.   </span>
                    <div class="bkmrkcont">
                    <input type="checkbox" />
                    </div>
                </div>
                <div class="pdcitem">
                    <img class="pdcim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTUqEf69bAqits79g4gGr0Q014ChmlPzKDXeAyWa3TuMq8LIUQF" />
                    <div class="dbkn">
                        <div class="pdbt" onclick="document.querySelector('#India').style.display = 'block';">more details</div>
                    </div>
                    <div class="pdcp">5990 / person</div>
                    <div class="pdch">India</div>
                    <span class="pdct">  Explore India holidays and discover the best time and places to visit. | With its sumptuous mix of traditions, spiritual beliefs, festivals, architecture and landscapes . </span>
                    <div class="bkmrkcont">
                    <input type="checkbox" />
                    </div>
                </div>
                <div class="pdcitem">
                    <img class="pdcim"src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT7i3Gx0Ep7cuSYAGgrUIravseamV2I3VxfIge_-GOgZ6xrKpCR" />
                    <div class="dbkn">
                        <div class="pdbt" onclick="document.querySelector('#London').style.display = 'block';">more details</div>
                    </div>
                    <div class="pdcp">8000 / person</div>
                    <div class="pdch">London</div>
                    <span class="pdct"> London is a common stop on most backpacking trips, European vacations, or two-week holidays. ... This London travel guide will help you get the most out of your visit on a budget. </span>
                    <div class="bkmrkcont">
                    <input type="checkbox" />
                    </div>
                </div>
                
                
            </div>
            
        </div>
        
        
        
        <div id="bp" >
            <div id="bph" data-aos="bph">
              Places to visit
                <hr id="bphr" data-aos="bphr" />
                <span id="bpht">
                    .
                </span>
            </div>
            
            
            <div class="bpimc">
                <div class="bpbt" onclick="document.querySelector('#London').style.display = 'block';">Read more</div>
                <div class="bpcov"></div>
                <span class="bptt">London
                <hr class="bpthr" />
                </span>
                
                <img class="bpim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT7i3Gx0Ep7cuSYAGgrUIravseamV2I3VxfIge_-GOgZ6xrKpCR" />
            </div>
            
            
            
            <div class="bpimc">
                <div class="bpbt" onclick="document.querySelector('#Thailand').style.display = 'block';">Read more</div>
                <div class="bpcov"></div>
                <span class="bptt">Thailand<hr class="bpthr" /></span>
                
                <img class="bpim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSqrmBqAloVQMcdIPmMwK7Q_bdOpAzTNLj1my4tOBVjG37WWqnO" />
            </div>
            
            
            
            <div class="bpimc">
                <div class="bpbt" onclick="document.querySelector('#China').style.display = 'block';">Read more</div>
                <div class="bpcov"></div>
                <span class="bptt">China<hr class="bpthr" /></span>
                
                <img class="bpim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNUhyMIGT82NFAZEQum8jImuCBE3eb9Z8A2MaO6up8hodWGwg8" />
            </div>  
            
            
            <div class="bpimc">
            <div class="bpbt" onclick="document.querySelector('#India').style.display = 'block';">Read more</div>
                <div class="bpcov"></div>
                <span class="bptt">India<hr class="bpthr" /></span>
                
                <img class="bpim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRp6aUf8x5NJ98Iu4wxMTvXi4cjZ-pzjz1jdOFyaPm2gxHK2T53" />
            </div>
            
            
            
            <div class="bpimc">
            <div class="bpbt" onclick="document.querySelector('#Nepal').style.display = 'block';">Read more</div>
                <div class="bpcov"></div>
                <span class="bptt">Nepal<hr class="bpthr" /></span>
                
                <img class="bpim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTblTA0fIlyiMJTMBiXjIwyvIE2Gp87yG_lNVrbx58tUbk8giv8" />
            </div>
        </div>
        
        
        <div id="ftr">
            <span id="ftrh">
            Why you choose pack your bags
                <hr id="ftrhr" data-aos="ftrhr" />
            </span>
            
            <div id="fc1" class="ftrca" data-aos="ftrca">
            
                
            </div>
            
            <div class="ftrca" data-aos="ftrca">
            <div class="ftrt">Registered Agency</div>
                Asas Restu Travels & Tours is one of the agencies registered with the Ministy of Tourism.
            </div>
            
            <div class="ftrcb" data-aos="ftrcb">
                <div class="ftrt">Interesting</div>
                We provide the best holiday package for you to go abroad.
            </div>
            
            <div class="ftrca" data-aos="ftrca">
                <div class="ftrt">Best Support</div>
                Efficient and fast help will make it easy for you to deal with us.
            </div>
            
            <div class="ftrcb" data-aos="ftrcb">
                <div class="ftrt">Trained Tour Leader</div>
                You will be with our trained tour leader to follow you during your vacation.
         
        </div>
        
        </div>
        
        <div id="revs">
            <span id="tr">Top reviews
            <hr id="trh" data-aos="trh" /></span>
            
            <div class="review">
               <div class="revic"></div>
               <div id="stars">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
               </div>
               <div id="revt">
                  journy makes you will happy thanks for giveing 5stars for hower serves
               </div>
            </div>
            
        </div>
        
        <div id="cnt">
        <section class="my-5">
    <div class="py-5">
    <div class="ftrcb" data-aos="ftrcb">
    <h1 class="text-center">contact form</h1>
    </div>
    <div class="w-50">
   
   <form name="contactform" method="post" action="action_page.php">
<div class="form-group">
<div class="ftrt" data-aos="ftrcb">
<label>username</label>
<input type="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<div class="ftrt" data-aos="ftrcb">
<label>Email</label>
<input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<div class="ftrt" data-aos="ftrcb">
<label>Mobile</label>
<input type="text" name="mobile" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<div class="ftrt" data-aos="ftrcb">
<label>Comments</label>
<textarea class="fomr-control" name="comment">
</textarea>
</div>
 <div class="ftrt" data-aos="ftrcb">
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
        
   
        </div>
        
        <div id="cntus">
            <span id="cnth">Contact us <hr id="cnthr" data-aos="cnthr" /></span>
            
            <div class="cnti" style="opacity:0;">
                
            </div>
            
            <div class="cnti">
                <span class="cntit"><div class="cntihr" data-aos="cntihr"></div><i class="fa fa-phone"></i> +917975245016 </span>
            </div>
            
            <div class="cnti">
                <span class="cntit"><div class="cntihr" data-aos="cntihr"></div><i class="fa fa-map"></i>   davanagere  , karnataka</span>
            </div>
            
            
            <div class="cnti">
                <span class="cntit"><div class="cntihr" data-aos="cntihr"></div><i class="fa fa-home"></i>  sarswathi nagara B block</span>
            </div>
            
        </div>
        
        
        
       <div id="London">
            <i class="fa fa-times" onclick="London.style.display = 'none';"></i>
            <i class="fa fa-angle-double-down"></i>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQtZx0MxBbEHOFm9B399sFDQ8gGDfM6x2nI2MBocC_YrapLhWLV" class="lmimg" />
            <div class="lctc">
                <span class="lct">
                    london
                </span>
            </div>
            <span class="lti">
            The London Eye is a giant Ferris wheel located on the edge of the River Thames. It is 135 metres tall and has a diameter of 120 metres. A short walk away, the area boasts the London Aquarium, Elizabeth Tower, the Houses of Parliament, Westminster Abbey and Nelson's Column. In 2013, the tallest building in London, the Shard, opened a viewing platform to the public. Other major tourist attractions in London[7] include the Tower of London, Buckingham Palace (although this is only open to the public during a limited number of months in the summer), Tower Bridge Experience, Madame Tussauds, ZSL London Zoo, London Dungeon and St Paul's Cathedral.

            </span>
            
            
            <div class="ltd">
                01 - 10 april
            </div>
            
            <div class="ltd">
                10 days
            </div>
            
            <div class="ltd">
                30 person max
            </div>
            
            <div class="ltd">
                ₹<del>10000 </del> 9999
            </div>
            
            <div class="lcbt">Book Now</div>
        </div>
        
        <div id="Thailand" onclick="Thailand.style.display = 'none';">
            <i class="fa fa-times"></i><i class="fa fa-angle-double-down"></i>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSri9rfYCvVWn0Etk9jZ_De8Zoxx222VjQ02Ooy-HVB7wonqQJ-" class="lmimg" />
            
            <div class="lctc">
                <span class="lct">
                    thailand
                </span>
            </div>
            <span class="lti">
            The Thailand is located in southern Asia it is known for great eats, martial arts, beaches, and many temples. Thailand also has many islands that are well known that have numerous resorts for tourists. ... The chicken rice of Thailand may not be as famous as Singapore's, but it is still a popular comfort food.

Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla


            </span>
            
            
            <div class="ltd">
                01 apr - 01 june
            </div>
            
            <div class="ltd">
                100 days
            </div>
            
            <div class="ltd">
                70 person max
            </div>
            
            <div class="ltd">
                ₹<del>5000 </del>5500
            </div>
            
            <div class="lcbt">Book Now</div>
            
        </div>
        
        <div id="China">
            <i onclick="China.style.display = 'none';" class="fa fa-times"></i> <i class="fa fa-angle-double-down"></i>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRTsgZtqkN87oBY5_K1z_g5zqoY_01L-hRXYAzGc7tZlZ9wI7GA" class="lmimg" />
            
            <div class="lctc">
                <span class="lct">
                    china
                </span>
           </div> 
                
            <span class="lti">
            Officially known as the People's Republic of China, China is the most populous state in the world, covering an area of approximately 9.6 million square kilometers. It is the world's second largest state by land area and currently the biggest communist country in the world.

Needless to say, this place has many attractions to entice its visitors, the most popular being Beijing, the city of several dynasties, besides the spectacular imperial palaces, it also possesses the most luxurious royal gardens and dazzling shopping malls. Shanghai can be described as the showpiece in the booming economy of the country. Though the beauty of Shanghai doesn't lie in scurrying from sight to sight, it definitely lies in the feel of the city's modern atmosphere. China is an intriguing nation with a lot to offer to a tourist, but consider your trip incomplete if you don't visit the Great Wall of China- an iconic symbol - being the longest wall in the world and one of the seven wonders. Another element that China is renowned for is authentic Chinese food, which is a much-savored cuisine and extensively available throughout the world. Shanghainese soup dumplings, spicy Sichuan food, and Beijing duck are just some of the distinct dishes you should try. It is, of course, the perfect place to pick anything from accessories to clothing, to electronics, Chinese products are not only eye pleasing but also affordable and pocket-friendly.


            </span>
            
            
            <div class="ltd">
                06 - 11 april
            </div>
            
            <div class="ltd">
                5 days
            </div>
            
            <div class="ltd">
                10 person max
            </div>
            
            <div class="ltd">
                ₹<del>10000</del> 9999
            </div>
            
            <div class="lcbt">Book Now</div>
                
        
            
            
            </div>
            
            <div id="India">
            <i onclick="India.style.display = 'none';"class="fa fa-times"></i> <i class="fa fa-angle-double-down"></i>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSNyac-AiPn6dVcVgP0kPX3ztpIlJp2JpfLKivi2lCeK1JUwIdG" class="lmimg" />
            
            <div class="lctc">
                <span class="lct">
                    india
                </span>
            </div>
            
            <span class="lti">
            India is home to several UNESCO World Heritage Sites; ranging from natural wonders to architectural marvels. While some are keepers of the magnificence of history, others are a safe and lush haven for biodiversity to flourish. As you explore India, don't forget to see these spectacular sites in the country.

            </span>
            
            <div class="ltd">
                01 - 21 april
            </div>
            
            <div class="ltd">
                20 days
            </div>
            
            <div class="ltd">
                10 person max
            </div>
            
            <div class="ltd">
                ₹<del>0001</del> 1000
            </div>
            
            <div class="lcbt">Book Now</div>
           
            </div>
            
            <div id="Nepal">
            <i onclick="Nepal.style.display = 'none';" class="fa fa-times"></i>
       <i class="fa fa-angle-double-down"></i>    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRKiSXxDEPKtlUcJiuY8SwfnfVDh4tGmc-lTobsET5LIU5HQbSg" class="lmimg" />
       
       
       <div class="lctc">
                <span class="lct">
                    nepal
                </span>
         </div>       
                <span class="lti">
                Nepal has established itself as a travelers and backpacker’s destination, exhibiting its breathtaking landscapes, pristine lakes, and rivers, mighty mountains, diverse cultures and traditions affixed by peace and harmony. Tourism has not only helped with the exchange of culture and traditions, ideas and principles, beliefs and ethics among nations but also has helped Nepal with its financial growth and liberty[1]


Macchapuchre Himal, PokharaPhoto by: Kushal Shah
Tourism is the largest industry in Nepal and its largest source of foreign exchange and revenue. Possessing eight of the ten highest mountains in the world, Nepal is a hot spot destination for mountaineers, rock climbers and people seeking adventure. The Hindu and Buddhist heritage of Nepal and its cool weather are also strong attractions.[2]

            </span>
            
            <div class="ltd">
                20 - 27 april
            </div>
            
            <div class="ltd">
                7 days
            </div>
            
            <div class="ltd">
                50 person max
            </div>
            
            <div class="ltd">
                ₹<del>8888 </del> 8889
            </div>
            
            <div class="lcbt">Book Now</div>

            
            
       
        </div>
        <!-- Section: Follow -->
  <section class="section section-follow teal black text center">
    <div class="container text-center">
      <div class="row">
        <div class="ftrt container text-center">
          <h2>Follow Travelville</h2>
          <a href="https://www.facebook.com/Pack-your-bags-104021724612662/" target="_blank" class="Facebook-text">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="https://wa.me/7975245016" target="_blank" class="twitter">
         <i class="fa fa-whatsapp"></i>
          </a>
          <a href="https://linkedin.com" target="_blank" class="linkedin">
            <i class="fa fa-linkedin"></i>
          </a>
          <a href="https://googleplus.com" target="_blank" class="googleplus">
            <i class="fa fa-google-plus"></i>
          </a>
          <a href="https://pinterest.com" target="_blank" class="pinterest">
            <i class="fa fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
        
    <i class="fa fa-angle-double-up"></i>
        <script>
             alert("lets pack your bags");
alert("loading may take time depending on your network");
window.onload = ()=>{
    
    setTimeout(function(){
        loader.style.display = 'none';
        window.scrollTo(0,0);
        
    },1000);
    var nav = false;
    var ddown = false;
    var skds = 0;
    var smen = 0;
        var ditems = document.querySelectorAll(".dstnitem"); navbutton.addEventListener("click",function(){
        if(nav == false){
        bar1.style.transform = "rotate(-45deg)";
        bar1.style.marginTop = "40%";
        bar2.style.marginLeft = '-6vh';
        bar2.style.opacity = '0';
        bar3.style.transform = 'rotate(45deg)';
        bar3.style.marginTop = "-40%";
        document.body.style.setProperty("--widthnav", " 70vw");
        document.body.style.setProperty('--navscale','scale(1)');
        nav = true;
        }
        
        else if(nav == true){
        bar1.style.transform = "rotate(0deg)";
        bar1.style.marginTop = "1.1vh";
        bar2.style.marginLeft = '2vh';
        bar2.style.opacity = '1';
        bar3.style.transform = 'rotate(0deg)';
        bar3.style.marginTop = "1.1vh";
        document.body.style.setProperty("--widthnav", "0vw");
        document.body.style.setProperty('--navscale','scale(0)');
        nav = false;
        }
        
        
        
    });
    
    
    var carscr = undefined; 
    
    
    window.addEventListener("scroll",function(){
        carscr = carousel1.getBoundingClientRect().top;
        if(carscr <= -window.innerHeight/2){
            navbar.style.background = '#333';
            document.querySelector(".fa-angle-double-up").style.display = 'block';
        }
        else{
            navbar.style.background = '#3331';
            document.querySelector(".fa-angle-double-up").style.display = 'none';
        }
        
        bar1.style.transform = "rotate(0deg)";
        bar1.style.marginTop = "1.1vh";
        bar2.style.marginLeft = '2vh';
        bar2.style.opacity = '1';
        bar3.style.transform = 'rotate(0deg)';
        bar3.style.marginTop = "1.1vh";
        navbar.style.top = '-8vh';
        setTimeout(function(){
            navbar.style.top = '0vh';
        },1000);
        document.body.style.setProperty("--widthnav", "0vw");
        document.body.style.setProperty('--navscale','scale(0)');
    });
    
    
    destination.addEventListener("click",function(){
        
        
        if(ddown == false){
            document.querySelector(".fa-arrow-down").style.color = "#ff7400";
            ddown = true;
            dstnitems.style.height = "23vh";
            for (var i = 0; i < ditems.length; i++) {
           ditems[i].addEventListener("click",function(){
             dstnitems.style.height = "0vh";
             dstn.innerHTML = this.innerHTML ;            document.querySelector(".fa-arrow-down").style.color = "#fff";
           });
        }
            
        }
        
        else{

            ddown = false;
            document.querySelector(".fa-arrow-down").style.color = "#222";
            dstnitems.style.height = " 0vh";
        }
    });
    
    document.querySelectorAll(".fa-chevron-up")[0].addEventListener("click",function(){
        smen += 1;
        tsa.innerHTML = smen;
    });
    
    document.querySelectorAll(".fa-chevron-up")[1].addEventListener("click",function(){
        skds += 1;
        tsk.innerHTML = skds;
    });
    
    document.querySelectorAll(".fa-chevron-down")[0].addEventListener("click",function(){
        smen -= 1;
        if(smen < 0){
            smen = 0;
        }
        tsa.innerHTML = smen;
    });
    
    document.querySelectorAll(".fa-chevron-down")[1].addEventListener("click",function(){
        skds -= 1;
        if(skds < 0){
            skds = 0;
        }
        tsk.innerHTML = skds;
        
    });
    
    
    var bookmarks = document.querySelectorAll(".fa-bookmark");
    for(var i = 0; i < bookmarks.length; i++){
        bookmarks[i].addEventListener("onclick",function(){
            if(this.style.color == "#aaa"){
                this.style.color = "#ff7400";
            }
        });
    }
    
    var pdind = 0;
    var pdslides = document.querySelectorAll(".pdcitem");
    
    pdslides[0].style.opacity = "1";
    pdslides[0].style.zIndex = "10";
    pdnext.addEventListener("click",function(){
        pdind += 1;
        if(pdind == 2){
            this.style.display = 'none';
        }
        pdprev.style.display = 'block';
        for(var i = 0; i < pdslides.length; i++){
            pdslides[i].style.opacity = "0";
            pdslides[i].style.zIndex = "0";
        }
        pdslides[pdind].style.opacity = '1';
        pdslides[pdind].style.zIndex = "10";
        this.style.color = "#ff7400";
        setTimeout(function(){
            pdnext.style.color = '#333';
        },1000)
    });
    
    pdprev.addEventListener("click",function(){
        pdind -= 1;
        if(pdind == 0){
            this.style.display = 'none';
        }
        pdnext.style.display = "block";
        for(var i = 0; i < pdslides.length; i++){
            pdslides[i].style.opacity = "0";
            pdslides[i].style.zIndex = "0";
        }
        pdslides[pdind].style.opacity = '1';
        pdslides[pdind].style.zIndex = "10";
        this.style.color = "#ff7400";
        setTimeout(function(){
            pdprev.style.color = '#333';
        },1000)
    });
    
            
    
    
     msgs = document.querySelectorAll(".lcbt");
     for(var i = 0; i < msgs.length; i++){
         msgs[i].addEventListener("click",function(){
             alert("Services unavailable due to COVID19....#Stay Home Stay Safe   go karuna");
         });
     }
    
    
    
    document.querySelector(".fa-angle-double-up").addEventListener("click",function(){
        window.scrollTo(0,0);
    });
    
    
    
    AOS.init({
    duration: 1500,
    delay: 300,
    });
    
    
    
    
}



            



            
            
            
        </script>
    </body>
</html>






