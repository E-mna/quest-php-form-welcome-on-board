<!DOCTYPE html>
<html lang="en">

<?php include '_head.php' ?>

<body>
    <header>
        <?php include '_navbar.php' ?>
        <div class="container">
            <h1>Welcome on board!</h1>
            <img src="/assets/images/avatar.png" alt="">
        </div>
    </header>
    <main>
        <section class="container">
            <h2 id="articles">Recent articles</h2>
            <div class="articles">
                <article>
                    <img src="/assets/images/responsive.png" alt="Responsive">
                    <h3>Responsive</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/scalable.png" alt="Scalable">
                    <h3>Scalable</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/inclusive.png" alt="Inclusive">
                    <h3>Inclusive</h3>
                    <a href="#">Read</a>
                </article>
            </div>
        </section>
        <section class="container">
            <h2 id="about">About</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum debitis fugit similique laborum,
                eveniet nam ratione sed, itaque, minus in hic dolores suscipit molestias quis quibusdam error blanditiis
                sapiente.
                Laborum laudantium aut, consequuntur voluptatum animi eaque mollitia? Saepe neque facilis minima
                laborum, provident numquam ipsum laudantium totam porro placeat exercitationem voluptates quia explicabo
                temporibus sapiente non. Quo, repellat corrupti.
            </p>
            <p>
                Excepturi dolore saepe, temporibus est voluptate necessitatibus molestiae sit minima eum quisquam et qui
                quaerat nemo nam, consequuntur nisi alias in praesentium. Fuga amet esse nam doloremque ut nemo nostrum.
            </p>
        </section>
        <?php include '_form.php'  ?>
    </main>

    <?php include '_footer.php' ?>
</body>

</html>