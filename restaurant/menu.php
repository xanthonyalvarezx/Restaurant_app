<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'Menu';
$customStyles = "./styles/menu.css";
include '../components/header.php'

?>

<body>
    <?php
    include '../components/navbar.php'
    ?>
    <main>
        <h1>Aperitivos / Appeteizers </h1>
        <div class="food-div">
            <div>
                <figure>
                    <img src="assets/pastallios.jpg" alt="pastallios" width="300" height="300">
                    <figcaption>Pastallios / Meat Pie</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/bacalitos.jpg" alt="bacalitos" width="300" height="300">
                    <figcaption>bacalitos / Fried Cod</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/Chicharones.jpg" alt="Chicharones" width="300" height="300">
                    <figcaption>Chicharones / Pork Craklins</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/tostones.jpg" alt="tostones" width="300" height="300">
                    <figcaption>tostones / Fried green Plantain</figcaption>
                </figure>
            </div>
        </div>

        <h1> Cenas / Dinners</h1>
        <div class="food-div">
            <div>
                <figure>
                    <img src="assets/arroz_con_pollo.jpg" alt="arroz_con_pollo" width="300" height="300">
                    <figcaption>Arroz con Pollo / Rice and Chicken</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/asopao-de-pollo.jpg" alt="asopao-de-pollo" width="300" height="300">
                    <figcaption>Asopao de Pollo / Chicken Stew</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/mofongo.jpg" alt="mofongo" width="300" height="300">
                    <figcaption>Mofongo / Green Plantain and crispy pork</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/Bistec_Encebollado.jpg" alt="Bistec_Encebollado" width="300" height="300">
                    <figcaption>Bistec Encebollado / Steak and Onions </figcaption>
                </figure>
            </div>
        </div>
        <h1> postre / dessert </h1>
        <div class="food-div">
            <div>
                <figure>
                    <img src="assets/arroz-con-leche.jpg" alt="arroz-con-leche" width="300" height="300">
                    <figcaption>Arroz con leche / Rice Pudding</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/flan.JPG" alt="flan" width="300" height="300">
                    <figcaption>Flan / caramel custard</figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img src="assets/piragua.jpg" alt="piragua" width="300" height="300">
                    <Figcaption>Piragua / Flavored shaved ice</Figcaption>
                </figure>
            </div>
        </div>
    </main>
</body>
<?php
include '../components/footer.php'

?>

</html>