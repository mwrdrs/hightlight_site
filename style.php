<?php
header("Content-type: text/css; charset: UTF-8");
?>

@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

h1 {
    /* Используйте пиксельный шрифт */
    font-family: 'Press Start 2P', cursive;
    /* Создайте эффект "глючного" текста */
    position: relative;
    color: #ffffff;
    text-shadow: 3px 0 0 #ff0000, -3px 0 0 #0000ff;
    animation: glitch 1s infinite;
}

@keyframes glitch {
    0% { text-shadow: 3px 0 0 #ff0000, -3px 0 0 #0000ff; }
    14% { text-shadow: 3px 0 0 #0000ff, -3px 0 0 #ff0000; }
    28% { text-shadow: -3px 0 0 #ff0000, 3px 0 0 #0000ff; }
    42% { text-shadow: -3px 0 0 #0000ff, 3px 0 0 #ff0000; }
    57% { text-shadow: 3px 0 0 #ff0000, -3px 0 0 #0000ff; }
    71% { text-shadow: 3px 0 0 #0000ff, -3px 0 0 #ff0000; }
    85% { text-shadow: -3px 0 0 #ff0000, 3px 0 0 #0000ff; }
    100% { text-shadow: -3px 0 0 #0000ff, 3px 0 0 #ff0000; }
}
body {
    background: url('https://i.pinimg.com/originals/23/b0/9c/23b09c3421d2202656c63aff7946b11a.gif') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color: #ffffff; 
    font-family: 'VCR OSD Mono', monospace; 
    text-align: center;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
h1 {
    font-size: 3em;
    text-shadow: 2px 2px #000;
}
p {
    font-size: 1.2em;
    text-shadow: 1px 1px #000;
}
.button {
    display: inline-block;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    margin: 40px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: #000;
    color: #ff0000;
    border: 2px solid #ff0000;
    border-radius: 12px;
}
.button:hover {
    background-color: #ff0000;
    color: #000;
}
.button img {
    vertical-align: middle;
    margin-right: 10px;
}

#developers {
    color: #ffffff; 
    font-family: 'VCR OSD Mono', monospace;
    display: flex;
    justify-content: space-around;
    margin-top: 50px; 
    background-color: rgba(0, 0, 0, 0.5); 
    border-radius: 15px; 
    padding: 30px;
}

#developers h2 {
    width: 100%;
    text-align: center;
    margin-bottom: 20px; 
}

.developer {
    text-align: center;
    margin: 0 10px;
}

.developer img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.developer p {
    font-size: 1.2em;
    text-shadow: 1px 1px #ff0000;
}

footer {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #000;
    color: white;
    text-align: center;
    padding: 0px 3;
}

@media screen and (max-width: 600px) {
    body {
        font-size: 18px;
    }
    h1 {
        font-size: 24px;
    }
}
