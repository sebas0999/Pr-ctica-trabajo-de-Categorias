<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/hero.css">
    <title>Document</title>
</head>
<body>

    <section class="hero">

        <div class="hero-content">
            <h1>Computación</h1>
            <p>Consigue el mejor equipo</p>

            <a href="">Ver mas</a>
        </div>

        
        <img src="../images/hero.jpg" alt="">

    </section>
    
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: Arial, Helvetica, sans-serif;
}


.hero{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px 10%;
    background: #bcbdbe;
    min-height: 80vh;
}


.hero-content{
    max-width: 500px;
}

.hero-content h1{
    font-size: 3rem;
    color: #222;
    margin-bottom: 15px;
}

.hero-content p{
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 25px;
}

.hero-content a{
    display: inline-block;
    text-decoration: none;
    background: #007BFF;
    color: white;
    padding: 12px 25px;
    border-radius: 6px;
    transition: 0.3s;
}

.hero-content a:hover{
    background: #0056b3;
}

.hero img{
    width: 450px;
    max-width: 100%;
    border-radius: 10px;
}


@media (max-width: 768px){

    .hero{
        flex-direction: column;
        text-align: center;
        gap: 30px;
    }

    .hero img{
        width: 100%;
    }

    .hero-content h1{
        font-size: 2.2rem;
    }
}
    </style>
    
</body>
</html>