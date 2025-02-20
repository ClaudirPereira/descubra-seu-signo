<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php'); ?>
    <meta charset="utf-8">
    <meta name="vielport" content="width=device-with, inicial-scalete=1.0" >
    <link  rel="stylesheet" href="css/style.css"> 
    <title>Descubra seu Signo</title>
</head>

<body>
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
    
    <main id="form_container">
        <div id="form_header">
            <h1 id="form_tilte">
                Descubra seu Signo
            </h1>
        </div>

        <form action="" id="form">
            <div id="input_container">
                <div class="input-box">
                    <label 
                        for="name" 
                        class="form-label">
                        Nome
                    </label>
                    <div class="input-field">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        placeholder="Escreva seu Nome"
                    >
                    <i class="fa-regular fauser"></i>
                    </div>
                </div>
                <div class="input-box">
                    <label 
                        for="last_name" 
                        class="form-label">
                        Sobrenome
                    </label>
                    <div class="input-field">
                    <input
                        type="text"
                        name="last_name"
                        id="last_name"
                        class="form-control"
                        placeholder="Escreva seu Sobrenome"
                    >
                    <i class="fa-regular fauser"></i>
                    </div>
                    <div class="input-box">
                    <label 
                        for="birthdate" 
                        class="form-label">
                        Nascimento
                    </label>
                    <div class="input-field">
                    <input
                        type="date"
                        name="birthdate"
                        id="birthdate"
                        class="form-control"
                    >
                    </div>
                    <button type="submit" class="btn-default">
                        <i class="fa-solid fa-check"></i>
                        Qual é o meu signo?
                    </button>
                </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>
