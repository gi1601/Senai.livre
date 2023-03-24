<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Fritadeira</title>
</head>
<body>
    <header class="header-login">
        <img src="../img/senai.png" alt="Logo">
        <div class="pesquisa">
            <input type="text" class="busque" required placeholder="   Busque produtos,marcas e muito mais" >
        </div>
        <nav>
            <a href="index.html">Sair</a>
        </nav>
        <div class="coisa">
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </header>
    <main class="prod">
        <section class="descri">
            <div class="frit">
                <img src="../img/fritadeira.png" alt="frit">
            </div>

            <div class="des">
                <p><strong>Fritadeira Elétrica Air Fryer 3,2l Eaf20 Electrolux 127v</strong></p>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <br>
                <br>
                <p><b>R$670,00</b></p>
                <p class="texto-verde">em 10x de R$67,00 sem juros</p>
                <p class="texto-verde-negrito">Frete grátis <span><i class="fa-solid fa-bolt"></i></span> FULL</p>
                <br>
                <p class="cinza">Potência: 1400W</p>
                <p class="cinza">Pesa 5.5kg.</p>
                <p class="cinza">Ideal para preparar suas refeições.</p>
            </div>
          

            <div class="cor">
                <div class="carrinho">
                    <a href="">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="button-compra">
                    <button type="button" id="diminuir">-</button>
                    <p id="contador">1</p>
                    <button type="button" id="aumentar">+</button>
                </div>
                <div>
                    <p>Sub-Total</p>
                    <p id="valor"><b>R$670,00</b></p>
                    <p id="parc">em 10x de R$67,00 sem juros</p>
                </div>
                <div class="compre">
                    <a href=""><button>Compre agora</button></a>
                </div>
            </div>

        </section>

        <section class="sugestoes">
            <div class="text">
                <p>Sugestões:</p>
            </div>
            <div class="promocoes">
                <div class="camera">
                    <img src="../img/camera.png" alt="camera" class="c">
                    <div class="button-borders">
                        <button class="bton">Oferta do dia</button>
                    </div>
                    <p><b>R$300,00</b></p>
                    <p class="texto-verde">10x de R$30,00 sem juros</p>
                    <p class="texto-verde-negrito">Frete grátis <span><i class="fa-solid fa-bolt"></i></span></p>
                    <p class="texto">Câmera fotográfica</p>
                </div>
                <div class="laptop">
                    <img src="../img/laptop.png" alt="laptop" class="l">
                    <div class="button-borders">
                        <button class="bton">Oferta do dia</button>
                    </div>
                    <p><b>R$1900,00</b></p>
                    <p class="texto-verde">10x de R$190,00 sem juros</p>
                    <p class="texto-verde-negrito">Frete grátis <span><i class="fa-solid fa-bolt"></i></span></p>
                    <p class="texto">LapTop</p>
                </div>
                <div class="cadeira">
                    <img src="../img/cadeiraGamer.png" alt="cadeira" class="cg">
                    <div class="button-borders">
                        <button class="bton">Oferta do dia</button>
                    </div>
                    <p><b>R$1600,00</b></p>
                    <p class="texto-verde">10x de R$160,00 sem juros</p>
                    <p class="texto-verde-negrito">Frete grátis <span><i class="fa-solid fa-bolt"></i></span></p>
                    <p class="texto">Cadeira Gamer</p>
                </div>
            </div>
        </section>
    </main> 

<script>
    let count = 1;
    const contador = document.getElementById("contador");
    const aumentarQtd = document.getElementById("aumentar");
    const diminuirQtd = document.getElementById("diminuir");
    const valorUn = document.getElementById("valor");
    const valorParc = document.getElementById("parc");

    function aumenta(){
        count += 1;
        calcula();
    }

    function diminui(){
        if(count > 0){
            count -= 1;
            calcula();
        }
    }

    function calcula(){
        let valorproduto = 670;
        const result = count * valorproduto;
        valorUn.innerHTML = result;
        valorParc.innerHTML = result / 10
        contador.innerHTML = count;
    }

    aumentarQtd.addEventListener("click", aumenta);
    diminuirQtd.addEventListener("click", diminui);

</script>    
    
    <script src="https://kit.fontawesome.com/c74938b314.js" crossorigin="anonymous"></script>
</body>
</html>