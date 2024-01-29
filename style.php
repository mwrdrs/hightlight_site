<?php
header("Content-type: text/css; charset: UTF-8");
?>

@import url('https://fonts.googleapis.com/css2?family=Creepster&display=swap');

body {
    background: url('https://i.pinimg.com/originals/49/f4/16/49f416a4d35244412c69cf7113bc27ba.gif') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color: #ff0000;
    font-family: 'Creepster', cursive;
    text-align: center;
    padding-bottom: 50px;
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
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    margin: 4px 2px;
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
    color: #ff0000;
    font-family: 'VCR OSD Mono', monospace;
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    background-color: rgba(0, 0, 0, 0.5); 
    border-radius: 15px; 
    padding: 60px;
}

#developers h2 {
    width: 100%;
    text-align: center;
    margin-bottom: 20px; 
}

.developer {
    text-align: center;
    margin: 0 400px; 
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

@media screen and (max-width: 600px) {
    body {
        font-size: 18px;
    }
    h1 {
        font-size: 24px;
    }
}
