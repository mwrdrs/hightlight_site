<script>
    document.querySelector(".button").addEventListener("click", function() {
        alert("Waiting for Open Beta Testing");
    });

    function changeLanguage() {
        var language = document.getElementById("language").value;
        if (language == "en") {
            document.getElementById("welcome").textContent = "Welcome to HightLight";
            document.getElementById("prepare").textContent = "Prepare to be scared...";
            document.getElementById("buy").textContent = "BUY 0€";
            document.getElementById("openModal").textContent = "Description";
            // Добавлено: перевод содержимого модального окна на английский язык
            document.getElementById("modalText").textContent = "Not a bad horror for playing with friends will be a good solution, although without friends will also be good! Choose for yourself how to develop your structures and so on. The choice is yours, you own your world, you fight monsters and enemies! Possible release 15.02.2024";
        } else if (language == "ru") {
            document.getElementById("welcome").textContent = "Добро пожаловать в HightLight";
            document.getElementById("prepare").textContent = "Приготовьтесь испытать страх...";
            document.getElementById("buy").textContent = "Купить 0€";
            document.getElementById("openModal").textContent = "О игре";
            // Добавлено: перевод содержимого модального окна на русский язык
            document.getElementById("modalText").textContent = "Не такой уж плохой хоррор для игры с друзьями будет хорошим решением, хотя и без друзей тоже будет хорошо! Выбирайте сами, как развивать свои структуры и так далее. Выбор за вами, вы владеете своим миром, вы сражаетесь с монстрами и врагами! Возможная версия 15.02.2024";
        } else if (language == "it") {
            document.getElementById("welcome").textContent = "Benvenuti in HightLight";
            document.getElementById("prepare").textContent = "Preparati ad avere paura...";
            document.getElementById("buy").textContent = "ACQUISTA 0€";
            document.getElementById("openModal").textContent = "Descrizione";
            // Добавлено: перевод содержимого модального окна на итальянский язык
            document.getElementById("modalText").textContent = "Non un brutto horror per giocare con gli amici sarà una buona soluzione, anche senza amici sarà comunque buono! Scegli tu come sviluppare le tue strutture e così via. La scelta è tua, possiedi il tuo mondo, combatti mostri e nemici! Possibile versione 15.02.2024";
        } else if (language == "pt") {
            document.getElementById("welcome").textContent = "Bem-vindo ao HightLight";
            document.getElementById("prepare").textContent = "Prepare-se para ter medo...";
            document.getElementById("buy").textContent = "COMPRAR 0€";
            document.getElementById("openModal").textContent = "Descrição";
            // Добавлено: перевод содержимого модального окна на португальский язык
            document.getElementById("modalText").textContent = "Não é um horror ruim para jogar com amigos será uma boa solução, embora sem amigos também será bom! Escolha como desenvolver suas estruturas e assim por diante. A escolha é sua, você possui seu mundo, luta contra monstros e inimigos! Possível lançamento 15.02.2024";
        }
    }

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("openModal");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    function changeLanguage() {
        var language = document.getElementById("language").value;
        window.location.href = window.location.pathname + '?lang=' + language;
    }
</script>
