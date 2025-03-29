<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'Home';
$customStyles = './styles/restaurant.css';
include '../components/header.php'
?>

<body>
    <?php
    $activeStyle = './styles/nav.css';
    include '../components/navbar.php'
    ?>
    <main>
        <div class="main-text">
            <p>Welcome to <b>Lo Bueno</b>, where the vibrant flavors of Puerto Rico come alive! Nestled in the heart of the community, our restaurant offers an authentic taste of the island's rich culinary heritage. From savory mofongo and succulent lechón to our refreshing piña colada, every dish is crafted with passion and the finest ingredients. Whether you're here for a family meal, a special celebration, or simply to enjoy the warm island atmosphere, Lo Bueno brings the spirit of Puerto Rico right to your table. Join us and experience the true meaning of bueno—where every bite is a celebration of flavor and tradition!
            </p>
        </div>
        <div class="bottom">
            <aside>
                <figure>
                    <img src="./assets/PR.jpg" alt="A colorful street in Puerto Rico" height="800" width="800">
                    <figcaption>A colorful street in Puerto Rico</figcaption>
                </figure>
            </aside>
            <p class="main-text-2">
                Puerto Rico boasts a rich and vibrant culture shaped by a blend of Taíno, Spanish, and African influences. This fusion is reflected in its music, dance, and especially its cuisine. Puerto Rican food, known as "cocina criolla," features bold flavors with ingredients like plantains, rice, beans, pork, and seafood. Popular dishes include mofongo (mashed plantains with garlic and pork or seafood), arroz con gandules (rice with pigeon peas), and lechón (slow-roasted pork). Puerto Ricans also enjoy sweet treats like tembleque (coconut pudding) and coquito, a creamy coconut-based holiday drink. Beyond food, the island's culture thrives through lively festivals, salsa music, and the warmth and hospitality of its people.
            </p>
        </div>
    </main>
</body>
<?php
include '../components/footer.php'

?>

</html>